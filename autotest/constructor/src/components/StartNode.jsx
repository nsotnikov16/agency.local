import { useCallback } from 'react';
import { Handle, Position } from 'reactflow';

export default function StartNode({ data }) {
    return (
        <>
            <div className="node node_start">
                <div className="node__title">Нажмите, чтобы начать</div>
            </div>
            <Handle type="source" position={Position.Right}  />
        </>
    );
}