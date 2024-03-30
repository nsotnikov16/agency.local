import {Handle, Position} from 'reactflow';
import {useCallback} from "react";

export default function MainNode({addClass, title, children, id}) {
    const onCopy = useCallback(() => {
        window.addNode({
            id: '125125125',
            type: 'ClickNode',
            position: {x: 200, y: 250},
            data: {label: 'Хуй'}, origin: [0.5, 0.0],
        })
    }, []);

    const onTrash = useCallback(() => window.removeNode(id), []);
    return (
        <>
            <Handle type="target" position={Position.Left}/>
            <div className={`node ${addClass}`}>
                <div className='node__title'>{title}</div>
                <div className="node__container">
                    {children}
                </div>
                <div className="node__absolute nodrag">
                    <div className="node__absolute-container">
                        <div className="node__copy" onClick={onCopy}></div>
                        <div className="node__trash" onClick={onTrash}></div>
                    </div>
                </div>
            </div>
            <Handle type="source" position={Position.Right}/>
        </>
    );
}