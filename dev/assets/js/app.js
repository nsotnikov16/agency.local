if (typeof AOS !== 'undefined') {
    AOS.init();
}
const html = document.querySelector('html');
const header = document.querySelector('.header');
let prevScroll = window.scrollY;

// Popups
class Popup {
    constructor(popupElement) {
        this.popupElement = popupElement;
        this.closeButton = this.popupElement.querySelector('.popup__close');
        this._handleEscClose = this._handleEscClose.bind(this)
        this.openingLinks = document.querySelectorAll(`[data-pointer="${this.popupElement.id}"]`)
        this.setEventListeners()
    }

    open() {
        document.body.style.overflow = "hidden";
        this.popupElement.classList.add('popup_opened')
        document.addEventListener('keydown', this._handleEscClose);
    }

    close() {
        this.popupElement.classList.remove('popup_opened');
        document.body.style.overflow = "visible";
        document.removeEventListener('keydown', this._handleEscClose);
    }

    _handleEscClose(evt) {
        if (evt.keyCode === 27) this.close();
    }

    _handleOverlayClick(evt) {
        if (evt.target === evt.currentTarget) this.close();
    }

    setEventListeners() {
        this.openingLinks.forEach(link => link.addEventListener('click', (e) => { e.preventDefault(); this.open(e.currentTarget) }))
        this.closeButton.addEventListener('click', () => this.close());
        this.popupElement.addEventListener('click', this._handleOverlayClick.bind(this));
    }
}

const popups = document.querySelectorAll('.popup')
let arrPopups = {}
document.addEventListener('DOMContentLoaded', () => {
    if (popups.length > 0) popups.forEach(item => {
        const popup = new Popup(item)
        arrPopups[item.id] = popup
    })
})

function handlerScroll() {
    const contentHeight = document.documentElement.scrollHeight - window.innerHeight;
    const scrollProgress = (window.scrollY / contentHeight) * 100;

    if (typeof window.noChangeBackround === 'undefined') {
        html.classList.remove('bg-2');
        if (scrollProgress >= 15) html.classList.add('bg-2');
    }


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
            if (top >= window.innerHeight - 100) return;
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

const swiper = new Swiper('.partners__wrapper', {
    slidesPerView: 5,
    spaceBetween: 50,
    scrollbar: {
        el: ".partners__wrapper .swiper-scrollbar",
        //dragSize: 200
    },
});

/* Маска */
window.addEventListener("DOMContentLoaded", function () {
    [].forEach.call(document.querySelectorAll('.tel'), function (input) {
        var keyCode;
        function mask(event) {
            event.keyCode && (keyCode = event.keyCode);
            var pos = this.selectionStart;
            if (pos < 3) event.preventDefault();
            var matrix = "+7 (___) ___-__-__",
                i = 0,
                def = matrix.replace(/\D/g, ""),
                val = this.value.replace(/\D/g, ""),
                new_value = matrix.replace(/[_\d]/g, function (a) {
                    return i < val.length ? val.charAt(i++) || def.charAt(i) : a
                });
            i = new_value.indexOf("_");
            if (i != -1) {
                i < 5 && (i = 3);
                new_value = new_value.slice(0, i)
            }
            var reg = matrix.substr(0, this.value.length).replace(/_+/g,
                function (a) {
                    return "\\d{1," + a.length + "}"
                }).replace(/[+()]/g, "\\$&");
            reg = new RegExp("^" + reg + "$");
            if (!reg.test(this.value) || this.value.length < 5 || keyCode > 47 && keyCode < 58) this.value = new_value;
            if (event.type == "blur" && this.value.length < 5) this.value = ""
        }
        input.addEventListener("input", mask, false);
        input.addEventListener("focus", mask, false);
        input.addEventListener("blur", mask, false);
        input.addEventListener("keydown", mask, false)
    });
});

/**
* Общий метод для работы с запросами
* @param {string} method 
* @param {string} url 
* @param {object} data 
* @returns {object}
*/
async function request(method = 'GET', url, data) {
    let result = {};
    try {
        if (!url) throw new Error('Отсутствует url адрес');
        const body = data instanceof FormData ? data : JSON.stringify(data);

        const options = {
            method,
            ...method != 'GET' && data ? { body } : ''
        }

        if (data instanceof FormData === false) {
            options.headers = {
                'Content-Type': 'application/json'
            }
        }

        const response = await fetch(url, options);

        result = await response.json();

    } catch (error) {
        result = { success: false, error: error.message };
    }

    return result;
}


const formStartProject = document.querySelector('[data-form-project]');
const successStartProject = document.querySelector('[data-project-success]');
const failedStartProject = document.querySelector('[data-project-failed]');
const formFields = document.querySelectorAll('input, textarea');

if (formFields.length) {
    formFields.forEach(item => item.addEventListener('input', () => item.classList.add('form__validity'), { once: true }))
}

if (formStartProject && successStartProject && failedStartProject) {
    const btn = formStartProject.querySelector('.form__btn');
    formStartProject.addEventListener('submit', async (e) => {
        e.preventDefault();
        try {
            btn.textContent = 'Отправляем...';
            failedStartProject.classList.add('d-none');
            const result = await request('POST', '/dev/api/project.php', new FormData(e.target));
            if (!result.status) throw new Error('');
            successStartProject.classList.remove('d-none');
            formStartProject.reset();
        } catch (error) {
            failedStartProject.classList.remove('d-none');
        } finally {
            arrPopups['form-start-result'].open();
            btn.textContent = 'Отправить';
        }
    })
}