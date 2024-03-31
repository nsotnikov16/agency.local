import {useCallback} from "react";

export const updateStorage = (data, testId) => {
    window.localStorage.setItem(`test-${testId}-data`, JSON.stringify(data));
}

export function getId() {
    return new Date().getTime() + Math.ceil(Math.random() * 1000000).toString()
}

export const getInitialStorageData = (type, testId) => {
    try {
        const data = JSON.parse(window.localStorage.getItem(`test-${testId}-data`));
        if (Array.isArray(data[type]) && data[type].length) return data[type];
    } catch (e) {

    }
    let defaultArray = [];
    if (type === 'nodes') defaultArray = [
        {id: getId(), type: 'StartNode', position: {x: 15, y: 15}},
    ]
    return defaultArray;
}

export const getCurrentTestId = () => {
    const id = Number(window.localStorage.getItem('testId'));
    if (id <= 0) {
        let newId = getId();
        window.localStorage.setItem('testId', newId);
        return newId;
    }
    return id;
}

export const onChangeInput = (key, value, nodeId) => {
    window.setNodes(nodes => nodes.map(node => {
        if (!node.data) node.data = {};
        if (node.id === nodeId) node.data[key] = value;
        return node;
    }))
}
