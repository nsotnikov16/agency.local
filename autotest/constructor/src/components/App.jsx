import React, {useCallback, useEffect, useRef, useState} from 'react';
import ReactFlow, {
    Controls,
    Background,
    useNodesState,
    useEdgesState,
    addEdge, useReactFlow, ReactFlowProvider
} from 'reactflow';
import StartNode from "./StartNode.jsx";
import ClickNode from "./ClickNode.jsx";
import FocusNode from "./FocusNode.jsx";
import TimeoutNode from "./TimeoutNode.jsx";
import InputNode from "./InputNode.jsx";
import ScriptNode from "./ScriptNode.jsx";
import ChoiceNode from "./ChoiceNode.jsx";
import 'reactflow/dist/style.css';
import {getCurrentTestId, getId, getInitialStorageData, updateStorage} from "../tools/functions.js";

const initialNodes = getInitialStorageData('nodes');
const initialEdges = getInitialStorageData('edges');
const nodeTypes = {StartNode, ClickNode, FocusNode, TimeoutNode, InputNode, ScriptNode, ChoiceNode};

function App() {
    const connectingNodeId = useRef(null);
    const {screenToFlowPosition} = useReactFlow();
    const [nodes, setNodes, onNodesChange] = useNodesState(initialNodes);
    const [edges, setEdges, onEdgesChange] = useEdgesState(initialEdges);
    const [testId, setTestId] = useState(getCurrentTestId());

    useEffect(() => {
        window.nodes = nodes;
        window.setNodes = setNodes;
        window.setEdges = setEdges;
        window.addNode = (node) => setNodes((nds) => nds.concat(node));
        window.removeNode = (nodeId) => setNodes((nds) => nds.filter(n => n.id !== nodeId))
    }, [])

    useEffect(() => {
        console.log(testId);
        setNodes(getInitialStorageData('nodes', testId));
        setEdges(getInitialStorageData('edges', testId));
    }, [testId])

    useEffect(() => {
        updateStorage({nodes, edges}, testId);
        if (!nodes.length) {
            window.addNode({
                id: getId(),
                type: 'StartNode',
                position: {x: 15, y: 15}
            })
        }

        setNodes(nds => nds.map((node, index) => {
            if (index === 0) node.data = {...node.data, fromStart: true};
            return node;
        }))

    }, [nodes, edges]);

    const onConnect = useCallback(
        (params) => {
            if (params.source === params.target) return;
            connectingNodeId.current = null;
            setEdges((eds) => addEdge(params, eds))
        },
        [],
    );

    const onConnectStart = useCallback((_, {nodeId}) => connectingNodeId.current = nodeId, []);

    const onConnectEnd = useCallback(
        (event) => {
            if (!connectingNodeId.current) return;

            const targetIsPane = event.target.classList.contains('react-flow__pane');

            if (targetIsPane) {
                const id = getId();
                // we need to remove the wrapper bounds, in order to get the correct position
                const newNode = {
                    id,
                    type: 'ChoiceNode',
                    position: screenToFlowPosition({
                        x: event.clientX,
                        y: event.clientY,
                    }),
                    data: {},
                    origin: [0.5, 0.0],
                };

                setNodes((nds) => nds.concat(newNode));
                setEdges((eds) => eds.concat({id, source: connectingNodeId.current, target: id}));
            }
        },
        [screenToFlowPosition],
    );


    return (
        <div style={{width: '100vw', height: '100vh'}}>
            <ReactFlow
                nodes={nodes}
                edges={edges}
                onNodesChange={onNodesChange}
                onEdgesChange={onEdgesChange}
                onConnect={onConnect}
                onConnectStart={onConnectStart}
                onConnectEnd={onConnectEnd}
                snapToGrid={true}
                nodeTypes={nodeTypes}
            >
                <Controls/>
                <Background variant="" gap={12} size={1}/>
            </ReactFlow>
        </div>
    );
}

export default () => (
    <ReactFlowProvider>
        <App/>
    </ReactFlowProvider>
);