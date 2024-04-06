
async function onLoadSvgImg(img) {
    if (typeof window.objSvg === 'undefined') window.objSvg = {};
    try {
        const src = img.getAttribute("data-src");
        if (!src.includes('.svg')) return;
        let svgContent = window.objSvg[src];
        if (!svgContent) {
            const response = await fetch(src);
            svgContent = await response.text();
            window.objSvg[src] = svgContent;
        }

        // Parse the XML data from the SVG file into a DOM object for easier evaluation
        const parser = new DOMParser();
        const xml = parser.parseFromString(svgContent, 'text/xml');
        const xmlSvg = xml.querySelector("svg");
        // Create a new <svg> element
        const svg = document.createElementNS("http://www.w3.org/2000/svg", "svg");

        // Copy attributes from <img> to <svg> and remove the "img-svg" marker
        svg.setAttribute("class", img.getAttribute("class") ?? '');
        svg.setAttribute("alt", img.getAttribute("alt") ?? '');
        svg.setAttribute("style", img.getAttribute("style") ?? '');

        // Copy data from SVG file to <svg> element
        svg.setAttribute("viewBox", xmlSvg.getAttribute("viewBox"));
        svg.innerHTML = xmlSvg.innerHTML;

        // Replace <img> with <svg>
        img.replaceWith(svg);
    } catch (error) {
        console.error(error);
    }
}

async function convertImgToSvg() {
    const imagesSvg = document.querySelectorAll('[data-img-svg]');
    if (imagesSvg.length) {
        for (let index = 0; index < imagesSvg.length; index++) {
            const element = imagesSvg[index];
            await onLoadSvgImg(element);
        }
    }
}

document.addEventListener('DOMContentLoaded', convertImgToSvg);
