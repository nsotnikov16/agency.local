import React, {useCallback, useEffect} from 'react';
import {useSelector} from "react-redux";
import ReactFlow, {
    MiniMap,
    Controls,
    Background,
    useNodesState,
    useEdgesState,
    addEdge,
} from 'reactflow';
import StartNode from "./StartNode.jsx";
import ClickNode from "./ClickNode.jsx";
import FocusNode from "./FocusNode.jsx";
import TimeoutNode from "./TimeoutNode.jsx";
import InputNode from "./InputNode.jsx";
import ScriptNode from "./ScriptNode.jsx";
import 'reactflow/dist/style.css';

const initialNodes = [
    {id: '1', type: 'StartNode', position: {x: 0, y: 0}, data: {label: '1124'}},
    {id: '2', type: 'ClickNode', position: {x: 0, y: 100}, data: {label: 'Клик'}},
    // {id: '3', type: 'TimeoutNode', position: {x: 200, y: 400}, data: {label: '321412'}},
    // {id: '4', type: 'FocusNode', position: {x: 300, y: 500}, data: {label: '1122'}},
    // {id: '5', type: 'InputNode', position: {x: 350, y: 600}, data: {label: '1122'}},
    // {id: '6', type: 'ScriptNode', position: {x: 500, y: 300}, data: {label: '1122'}},
];
const initialEdges = [
    {id: 'e1-2', source: '1', target: '2'},
    // {id: 'e2-3', source: '2', target: '3'},
    // {id: 'e3-4', source: '3', target: '4'}
];
const nodeTypes = {StartNode, ClickNode, FocusNode, TimeoutNode, InputNode, ScriptNode};
export default function App() {
    const [nodes, setNodes, onNodesChange] = useNodesState(initialNodes);
    const [edges, setEdges, onEdgesChange] = useEdgesState(initialEdges);

    useEffect(() => {
        window.addNode = (node) => setNodes(nds => nds.concat(node));
        window.removeNode = (nodeId) => {
            const newNodes = nodes.filter(n => n.id !== nodeId)
            setNodes(newNodes);
            window.sessionStorage.setItem('nodes', JSON.stringify(newNodes));
        };
    }, [])

    const onConnect = useCallback(
        (params) => setEdges((eds) => addEdge(params, eds)),
        [setEdges],
    );

    return (
        <div style={{width: '100vw', height: '100vh'}}>
            <ReactFlow
                nodes={nodes}
                edges={edges}
                onNodesChange={onNodesChange}
                onEdgesChange={onEdgesChange}
                onConnect={onConnect}
                snapToGrid={true}
                nodeTypes={nodeTypes}
            >
                <Controls/>
                {/*<MiniMap/>*/}
                <Background variant="" gap={12} size={1}/>
            </ReactFlow>
        </div>
    );
}