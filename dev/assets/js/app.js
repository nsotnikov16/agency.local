if (typeof AOS !== 'undefined') {
    AOS.init();
}
const html = document.querySelector('html');
const header = document.querySelector('.header');
let prevScroll = window.scrollY;

function handlerScroll() {
    const contentHeight = document.documentElement.scrollHeight - window.innerHeight;
    const scrollProgress = (window.scrollY / contentHeight) * 100;

    html.classList.remove('bg-2');
    if (scrollProgress >= 35) html.classList.add('bg-2');

    if (header) {
        header.classList.remove('header_scrolled');
        header.classList.remove('header_hide');
        if (scrollProgress >= 3) header.classList.add('header_scrolled');
        if (window.scrollY > prevScroll) header.classList.add('header_hide');
    }

    prevScroll = window.scrollY;
}

window.addEventListener('scroll', handlerScroll);