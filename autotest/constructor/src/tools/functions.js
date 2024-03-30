export const updateStorage = (data) => {
    window.localStorage.setItem('test1', JSON.stringify(data));
}

export function getId() {
    return new Date().getTime() + Math.ceil(Math.random() * 1000000).toString()
}

export const getInitialStorageData = (type) => {
    try {
        const data = JSON.parse(window.localStorage.getItem('test1'));
        if (Array.isArray(data[type]) && data[type].length) return data[type];
    } catch (e) {

    }
    let defaultArray = [];
    if (type === 'nodes') defaultArray = [
        {id: getId(), type: 'StartNode', position: {x: 15, y: 15}},
    ]
    return defaultArray;
}

