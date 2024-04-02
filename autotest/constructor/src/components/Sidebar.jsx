import MainNode from "./MainNode.jsx";
import React, {useCallback, useState} from "react";
import {getCurrentTestId, getTestsLocalStorage} from "../tools/functions.js";

export default function Sidebar({setTestId}) {
    const [tests, setTests] = useState(getTestsLocalStorage() ?? []);
    const [isOpenSidebar, setIsOpenSidebar] = useState(true);

    return <aside className={`sidebar ${!isOpenSidebar ? 'sidebar_hide' : ''}`}>
        <div className="sidebar__container">
            <div className="sidebar__header">
                <div className="sidebar__arrow" onClick={() => setIsOpenSidebar(!isOpenSidebar)}>
                    <svg width="25px" height="25px" viewBox="0 0 24 24" fill="white"
                         xmlns="http://www.w3.org/2000/svg">
                        <path d="M4 12H20M4 12L8 8M4 12L8 16" stroke="white" strokeWidth="2" strokeLinecap="round"
                              strokeLinejoin="round" />
                    </svg>
                </div>
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