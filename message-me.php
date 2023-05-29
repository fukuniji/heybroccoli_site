  <!-- ---------------------FORM-11------------------------ -->

  <div class="main__message-me message-me">
    <div class="message-me__wrapper">

      <h2 class="message-me__title title"> Напишите мне </h2>
      <div class="message-me__subtitle">для этого можете заполнить форму или написать в удобный мессенджер</div>
      
      <div class="message-me__form-part form-part">
        <form class="message-me__form form" action="#">
          <input class="form__input" type="text" placeholder="Имя" pattern="[A-Za-zА-Яа-яЁё]{2}" required>
          <input class="form__input" type="email" placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required>
          <input class="form__input" type="tel" placeholder="Телефон" pattern="(\+7[0-9]{10}|8[0-9]{10})" required>
          <!-- <label class="form__label" for="policy_check">
          <input class="form__checkbox" id="policy_check" type="checkbox" value="1" checked>нажимая кнопку, вы даете согласие на обработку персональных данных и соглашаетесь с
          <a class="form__link" href="#">Политикой конфиденциальности</a>
          </label> -->
          <label class="form__label" for="policy_check"><input class="form__checkbox" id="policy_check" type="checkbox" name="check" value="yes"><span></span>нажимая кнопку, вы даете согласие на обработку персональных данных и соглашаетесь с
          <a class="form__link" href="#">Политикой конфиденциальности</a></label>
          <!-- <label class="custom-checkbox"><input type="checkbox" name="ch"><span></span>Check</label></p> -->
          <button class="message-me__button-long_white">Отправить</button>
        </form>
        
        <div class="message-me__mm-task-btn mm-task-btn">
          <button onclick="window.location.href ='https://t.me/ffemme';" class="mm-task-btn__button-long">
            Telegram <!-- <img src="./assets/image/form/telegram-icon.svg" alt=""> -->
            <i class="social-icon"></i>
          </button>
          <button onclick="window.location.href ='https://wa.me/351912780199';" class="mm-task-btn__button-long mm-task-btn__button-long_green">
            WhatsApp <!-- <img src="./assets/image/form/whatsapp-icon.svg" alt=""> -->
            <i class="social-icon social-icon_whatsapp"></i>
          </button>
        </div>
      </div>

    </div>
    <!-- <div class="message-me__photo"></div> -->
    <img src="./assets/image//form/elena.jpg" alt="Елена" class="message-me__img">
  </div>
  <!-- ---------------------FORM-11 END------------------------- -->

</main>
