<main>
    <section class="addUserMest">
        <div class="content-container container">
            <div class="addus">
                <p class="text-addUserMest">
                    Добавление места
                </p>
                <form action="" method="POST">
                    <div>
                        <label for="name">Название*</label><br />
                        <input name="name" id="name" type="text" required>
                    </div>
                    <div>
                        <label for="adress">Адрес*</label><br />
                        <input name="adress" id="adress" type="text" required>
                    </div>
                    <div>
                        <label for="timeJob">Время работы*</label><br />
                        <input name="timeJob" id="timeJob" type="text" required>
                    </div>
                    <div>
                        <label for="Other">Описание*</label><br />
                        <textarea name="descr" id="Other"></textarea required>
                    </div>
                    <div>
                        <label for="contact">Контактные данные*</label><br />
                        <input name="contact" id="contact" type="text" required>
                    </div>
                    <div>
                        <label for="check">Средний чек (для кафе и ресторанов)</label><br />
                        <input name="check" id="check" type="text">
                    </div>
                    <div>
                        <label for="Other">Другое</label><br />
                        <textarea class="" name="Other" id="Other"></textarea>
                    </div>
                    <div>
                        <label for="inputFile">Фотографии*</label><br />
                        <input style = "outline:none;" class="inputFile" name="file" type="file" required>
                        <p class="error">Необходимы фотографии</p>
                    </div>
                    <button class="buttonAddMest">Отправить</button>
                </form>
            </div>
        </div>
    </section>
</main>