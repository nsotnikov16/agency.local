import MainNode from "./MainNode.jsx";

export default function ScriptNode(props) {
    return (
        <MainNode title="Свой скрипт" addClass="node_script" {...props}>
            <textarea cols="30" rows="10" className="mt-10px node__textarea nodrag"
                      placeholder='Скрипт (без тега <script>)'></textarea>
        </MainNode>
    );
}