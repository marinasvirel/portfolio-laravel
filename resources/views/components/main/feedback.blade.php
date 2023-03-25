<div class="container">
  <h2 class="feedback-title title">
    Обратная связь
  </h2>

  <form action="#" class="feedback-form">
    @csrf
    <input type="text" class="feedback-form-field" placeholder="Ваше имя">
    <input type="text" class="feedback-form-field" placeholder="Ваш e-mail">

    <textarea name="feedback-description" id="feedback=description" cols="20" rows="10"
              class="feedback-form-textarea" placeholder="Ваше сообщение"></textarea>

    <div class="feedback-form__attach-file">
      <label for="file-input">
        <span class="icon icon__attach-file"></span>
        Прикрепить файл
      </label>
      <input id="file-input" type="file" />
    </div>

    <input type="submit" class="feedback-form__btn-send" placeholder="Отправить">
  </form>
</div>
