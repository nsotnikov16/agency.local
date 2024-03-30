import MainNode from "./MainNode.jsx";

export default function ScriptNode({data}) {
    return (
        <MainNode title="Свой скрипт" addClass="node_script">
            <textarea cols="30" rows="10" className="mt-10px node__textarea nodrag"
                      placeholder='Скрипт (без тега <script>)'></textarea>
        </MainNode>
    );
}