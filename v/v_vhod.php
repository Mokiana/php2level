<?
if (isset($_SESSION[login]) && isset($_SESSION[pass])) {
    echo "Добро пожаловать, " . $_SESSION[login];
} else {
echo $message ? $message : ""; ?>
<form method="post">
    <p>Логин <input type="text" name="login" maxlength="30" placeholder="Введите Логин" autofocus required>
    </p>
    <p>Пароль <input type="password" minlength="2" name="pass" placeholder="Введите Пароль" required></p>
    <input type="submit" name="enter" value="Войти">
</form>
<? } ?>