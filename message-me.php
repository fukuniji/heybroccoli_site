  <!-- ---------------------FORM-11-------------------------->

  <div class="main__form form">
    <div class="form__wrapper">
      <h2 class="form__title title"> Напишите мне </h2>
      <div class="form__subtitle">для этого можете заполнить форму или написать в удобный мессенджер</div>
      <form class="form__forma forma" action="#">
        <input class="forma__input" type="text" placeholder="Имя" pattern="[A-Za-zА-Яа-яЁё]{2}" required>
        <input class="forma__input" type="email" placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required>
        <input class="forma__input" type="tel" placeholder="Телефон" pattern="(\+7[0-9]{10}|8[0-9]{10})" required>
        <input class="forma__input" type="checkbox" value="1">нажимая кнопку, вы даете согласие на обработку персональных данных и соглашаетесь с
        <a href="#">Политикой конфиденциальности</a>
      </form>

      <button class="form__button-long_white">
        Отправить
      </button>

      <div class="form__task__btn task__btn">
        <button onclick="window.location.href ='https://t.me/ffemme';" class="task__btn__button-long">
          Telegram
          <img src="./assets/image/task/telegram.png" alt="">
        </button>
        <button onclick="window.location.href ='https://wa.me/351912780199';" class="task__btn__button-long">
          WhatsApp <img src="./assets/image/task/watsapp.png" alt="">
        </button>
        <img src="./assets/image/form/elena.jpg" alt="Елена" class="form__img">
      </div>
    </div>
  </div>
  <!-- ---------------------FORM-11 END--------------------------->

</main>