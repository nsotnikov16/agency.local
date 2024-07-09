<form class="form form_consultant" data-form-consultant>
    <div class="form__wrapper">
        <div class="form__row">
            <label class="form__label">Как Вас зовут? *</label>
            <input class="form__input" type="text" name="name" placeholder="Введите ваше имя" minlength="2" maxlength="30" required autocomplete="off">
        </div>
        <div class="form__row">
            <label class="form__label">Удобный способ связи</label>
            <div class="form__checkboxes">
                <label class="form__checkbox">
                    <input type="radio" name="method" value="phone" checked required>
                    <span>Телефон</span>
                </label>
                <label class="form__checkbox">
                    <input type="radio" name="method" value="email" required>
                    <span>Email</span>
                </label>
            </div>
        </div>
        <div class="form__row">
            <label class="form__label" for="consultant-phone">Ваш номер телефона <span data-required>*</span></label>
            <input class="form__input tel" id="consultant-phone" type="text" pattern="^\+7 \(\d{3}\) \d{3}-\d{2}-\d{2}$" name="phone" minlength="18" placeholder="+7 (800) 555-35-35" autocomplete="off" title="Формат: +7 (800) 555-35-35" maxlength="18" required>
        </div>
        <div class="form__row">
            <label class="form__label" for="consultant-email">Ваш Email <span data-required></span></label>
            <input class="form__input" id="consultant-email" type="email" name="email" placeholder="example@example.ru" minlength="2" maxlength="80" autocomplete="off">
        </div>
        <div class="form__row">
            <label class="form__label">Сообщение</label>
            <textarea name="message" class="form__textarea" maxlength="300" autocomplete="off"></textarea>
        </div>
        <p>* - обязательные поля к заполнению</p><br>
        <p class="form__policy">Нажимая кнопку "Отправить", Вы соглашаетесь с <br><a target="_blank" href="/privacy-policy/">Политикой в отношении обработки персональных данных</a></p>
        <button class="btn form__btn">Отправить</button>
    </div>
</form>
<div class="popup popup_result" id="form-consultant-result">
    <div class="popup__container">
        <div class="popup__content">
            <div data-consultant-failed class="content d-none">
                <h3>Что-то пошло не так, попробуйте снова</h3>
                <p>Если ошибка повторится, сообщите нам по email <a href="mailto:<?= EMAIL ?>"><?= EMAIL ?></a></p>
            </div>
            <div data-consultant-success class="content d-none">
                <h2 class="section__title">Спасибо за обращение!</h2>
                <p>Наша команда свяжется с Вами в ближайшее время 🙌</p>
            </div>
        </div>
        <div class="popup__close">&#x2715;</div>
    </div>
</div>