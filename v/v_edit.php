<?
if (isset($_SESSION[login]) && isset($_SESSION[pass])) {
    echo "Приветик, " . $_SESSION[login] . ", это твой личный кабинет. Делай в нем, что хочешь";
} else {
echo $message ? $message : ""; ?>
<? } ?>
<form method="post">
    <input type="submit" name="exit" value="Выйти">
</form>
