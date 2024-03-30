import MainNode from "./MainNode.jsx";

export default function FocusNode({data}) {
    return (
        <MainNode title="Фокус" addClass="node_focus">
            <textarea cols="30" rows="3" className="mt-10px node__textarea nodrag" placeholder='Селектор'></textarea>
            <input className="mt-10px node__input nodrag" type="text" placeholder="Подсказка"/>
        </MainNode>
    );
}