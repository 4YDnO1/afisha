<main>
    <section class="addUserMest">
        <div class="content-container container">
            <div class="addus">
                <p class="text-addUserMest">
                    Создание мероприятия
                </p>
                <form action="./database/functions/event_funcs/create.php" method="POST">
                    <div>
                        <label for="name">Название*</label><br />
                        <input name="create[]" id="name" type="text" required>
                    </div>
                    <div>
                        <label for="date">Дата проведения*</label><br />
                        <input name="create[]" id="date" type="date" required>
                    </div>
                    <div>
                        <label for="timeJob">Адрес*</label><br />
                        <input name="create[]" id="timeJob" type="text" required>
                    </div>
                    <div>
                        <label for="Other">Описание*</label><br />
                        <textarea name="create[]" id="Other"></textarea required>
                    </div>
                    <div>
                        <label for="contact">Контактные данные*</label><br />
                        <input name="create[]" id="contact" type="text" required>
                    </div>
                    <div>
                        <label for="check">Стоимость билетов</label><br />
                        <input name="create[]" id="check" type="text">
                    </div>
                    <div>
                        <label for="Other">Дополнительная информация</label><br />
                        <textarea class="create[]" name="Other" id="Other"></textarea>
                    </div>
                    <div>
                        <label for="inputFile">Фотографии*</label><br />
                        <input style = "outline:none;" class="inputFile" name="create[]" type="file" required>
                        <p class="error">Необходимы фотографии</p>
                    </div>
                    <button class="buttonAddMest">Отправить</button>
                </form>
                
            </div>
        </div>
    </section>
</main>