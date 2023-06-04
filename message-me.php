  <!-- ---------------------FORM-11------------------------ -->

  <div class="main__message-me message-me">
    <div class="message-me__wrapper" id="policy">
      <h2 class="message-me__title title _anim_items _anim-no-hide"> Напишите мне </h2>
      <div class="message-me__subtitle _anim_items _anim-no-hide">для этого можете заполнить форму или написать в удобный мессенджер</div>
      <div class="message-me__form-part form-part">
        <form id="message-me__form" class="message-me__form form">
          <input class="form__input" type="text" name="NAME" placeholder="Имя">
          <input class="form__input" type="email" name="EMAIL" placeholder="Email">
          <input class="form__input" type="tel" name="PHONE" placeholder="Телефон">
          <label class="form__label" for="policy_check"><input class="form__checkbox" id="policy_check" type="checkbox" name="CHECK"><span class="form__custom-checkbox"></span>нажимая кнопку, вы даете согласие на обработку персональных данных и соглашаетесь с
            <a class="form__link" href="./policy.html">Политикой конфиденциальности</a></label>
          <button id="sendMessage" class="message-me__button-long_white">Отправить</button>
        </form>

        <div class="message-me__mm-task-btn mm-task-btn">
          <button onclick="window.location.href ='https://t.me/ffemme';" class="mm-task-btn__button-long">
            Telegram
            <i class="social-icon"></i>
          </button>
          <button onclick="window.location.href ='https://wa.me/351912780199';" class="mm-task-btn__button-long mm-task-btn__button-long_green">
            WhatsApp
            <i class="social-icon social-icon_whatsapp"></i>
          </button>
        </div>
      </div>
    </div>
    <picture class="message-me__img _anim_items _anim-no-hide">
      <!-- large desktop: -->
      <source media="(min-width: 1441px)" srcset="./assets/image/form/elena-photo_11_desktop_x2.jpg">
      <!-- desktop: -->
      <source media="(min-width: 1024px)" srcset="./assets/image/form/elena-photo_11_desktop.jpg">
      <!-- tablet: -->
      <source media="(min-width: 768px)" srcset="./assets/image/form/elena-photo_11_tablet.jpg">
      <!-- mobile: -->
      <source media="(max-width: 767px)" srcset="./assets/image/form/elena-photo_11_mobile.jpg">
      <!-- если не поддерживается source -->
      <img src="./assets/image/form/elena-photo_11_desktop.jpg" width="auto" height="auto" alt="Нутрициолог Куликова Елена">
    </picture>
  </div>

  <!-- ---------------------FORM-11 END------------------------- -->

  </main>