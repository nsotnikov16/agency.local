import MainNode from "./MainNode.jsx";

export default function ClickNode(props) {
    return (
        <MainNode addClass="node_click" title="Клик" {...props}>
            <textarea cols="30" rows="3" className="mt-10px node__textarea nodrag"
                      onChange={({target}) => window.onChangeInput('selector', target.value, props.id)}
                      placeholder='Селектор'>{props.data.selector}</textarea>
            <input className="mt-10px node__input nodrag" type="text" placeholder="Подсказка"
                   value={props.data.hint} onChange={({target}) => window.onChangeInput('hint', target.value, props.id)}/>
        </MainNode>
    );
}