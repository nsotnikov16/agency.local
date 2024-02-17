<section class="section" style="padding-top: 0;">
    <div class="container">
        <form class="form form_start">
            <div class="form__wrapper">
                <div class="form__row">
                    <label class="form__label">Как Вас зовут? </label>
                    <input class="form__input" type="text" name="name" placeholder="Введите ваше имя" minlength="2" maxlength="30" required>
                </div>
                <div class="form__row">
                    <label class="form__label">Ваш номер телефона</label>
                    <input class="form__input tel" type="text" name="phone" minlength="18" placeholder="+7 (800) 555-35-35" maxlength="18" required>
                </div>
                <div class="form__row">
                    <label class="form__label">Ваш Email</label>
                    <input class="form__input" type="text" name="email" placeholder="example@example.ru" minlength="2" maxlength="80">
                </div>
                <div class="form__row">
                    <label class="form__label">Опишите Ваш проект</label>
                    <textarea name="description" class="form__textarea"></textarea>
                </div>

                <button class="btn form__btn">Отправить</button>
            </div>
        </form>
    </div>
</section>