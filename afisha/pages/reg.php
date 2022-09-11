<main>
    <section class="">
        <div class="content-container container">

            <form action="/database/auth.php" method="post">

                <caption>
                    Регистрация
                </caption>
                
                <fieldset class="flex flex-col justify-center items-center">
                    <div class="input-group">
                        <label for=""></label>
                        <input type="text" name="email" placeholder="email">
                    </div>

                    <div class="input-group">
                        <label for=""></label>
                        <input type="password" name="password" placeholder="password">
                    </div>

                    <div class="input-group">
                        <label for=""></label>
                        <input type="hidden" name="action" value="register">
                    </div>

                    <input name="action" value="register" type="submit">
                </fieldset>


            </form>

        </div>
    </section>
</main>
