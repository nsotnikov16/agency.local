import MainNode from "./MainNode.jsx";

export default function TimeoutNode(props) {
    return (
        <MainNode title="Ожидание" addClass="node_timeout" {...props}>
            <div className="node__timeout mt-10px">
                <input className="node__input nodrag" type="text"/>
                <div>сек</div>
            </div>
        </MainNode>
    );
}