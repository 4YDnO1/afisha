<main>
    <section>
        <form action="/database/auth.php" method="post">
            <div class="group">
                <label for="">Login</label>
                <input type="text" name="login" placeholder="login">
            </div>
            <input type="text" name="login" placeholder="login">
            <input type="password" name="password" placeholder="password">
            <input type="hidden" name="action" value="register">

            <input name="action" value="register" type="submit">
            <input type="submit" name="action" value="auth">
        </form>
    </section>
</main>
