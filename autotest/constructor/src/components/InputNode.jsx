import MainNode from "./MainNode.jsx";

export default function InputNode(props) {
    return (
        <MainNode title="Ввод значения" addClass="node_input" {...props}>
            <textarea cols="30" rows="3" className="mt-10px node__textarea" placeholder='Селектор'></textarea>
            <input className="mt-10px node__input nodrag" type="text" placeholder="Значение"/>
            <input className="mt-10px node__input nodrag" type="text" placeholder="Подсказка"/>
        </MainNode>
    );
}