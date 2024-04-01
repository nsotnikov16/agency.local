import MainNode from "./MainNode.jsx";
import React, {useCallback, useState} from "react";
import {getCurrentTestId, getTestsLocalStorage} from "../tools/functions.js";

export default function Sidebar({setTestId}) {
    const [tests, setTests] = useState(getTestsLocalStorage() ?? []);

    return <aside className="sidebar">
        <div className="sidebar__container">
            <div className="sidebar__header">
                ITRINITY
            </div>
            <div className="sidebar__content">
                <button className="sidebar__add">Добавить</button>
                {tests.length > 0 &&
                    <div className="sidebar__tests">
                        {tests.map((test) => {
                            return <div className="sidebar__test" key={test.id}>
                                <input className="sidebar__test-name" type="text" placeholder="Название теста"
                                       value={test.name}/>
                                <div className="sidebar__test-switch"></div>
                                <div className="node__trash sidebar__test-trash"></div>
                            </div>
                        })}
                    </div>}
            </div>
        </div>
    </aside>;
}