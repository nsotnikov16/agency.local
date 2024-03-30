import MainNode from "./MainNode.jsx";

export default function ClickNode({id}) {
    return (
        <MainNode addClass="node_click" title="Клик" id={id}>
            <textarea cols="30" rows="3" className="mt-10px node__textarea nodrag" placeholder='Селектор'></textarea>
            <input className="mt-10px node__input nodrag" type="text" placeholder="Подсказка"/>
        </MainNode>
    );
}