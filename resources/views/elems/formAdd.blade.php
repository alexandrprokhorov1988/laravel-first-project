<section class="add-form">
    <form action="" method="post" class="input-form add-form__input-form">
        {{ csrf_field() }}
        <input type="text" name="userName" class="input-form__name" placeholder="name">
        <textarea name="message" id="" cols="50" rows="10" class="input-form__message"
                  placeholder="message"></textarea>
        <input type="submit" name="submit" class="input-form__button">
    </form>
</section>