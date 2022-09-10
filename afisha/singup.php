<!DOCTYPE html>
<html lang="ru">
    <?php $title = 'Афиша. Альметьевск. Главная страница' ?>
    <?php require_once 'req/head.php' ?>

    <body class="flex flex-col min-h-screen">
        <?php require_once 'req/header.php' ?>

        <?php require_once 'pages/main.php' ?>

        <?php require_once 'req/footer.php' ?>
    </body>

</html>


<form action="/database/auth.php" method="post">

    <input type="text" name="login" placeholder="login">
    <input type="password" name="password" placeholder="password">
    <input type="hidden" name="action" value="register">

    <input name="action" value="register" type="submit">
    <input type="submit" name="action" value="auth">

</form>
