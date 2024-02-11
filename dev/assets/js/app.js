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


function lazyLoad() {
    const lazyImages = document.querySelectorAll('[data-lazy-src]')
    if (!lazyImages.length) return;
    lazyImages.forEach(img => {
        //img.setAttribute('src', '/dev/assets/images/load.gif');
        function showImg() {
            const { top } = img.getBoundingClientRect();
            if (top >= window.innerHeight) return;
            const src = img.getAttribute('data-lazy-src');
            if (!src) return;
            img.setAttribute('src', src)
            img.removeAttribute('data-lazy-src');
            document.removeEventListener('scroll', showImg);
        }
        showImg()
        window.addEventListener('scroll', showImg)
    })
}

lazyLoad();

window.addEventListener('scroll', handlerScroll);