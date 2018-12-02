<?php
/**
 * Created by PhpStorm.
 * User: lozunoff
 * Date: 02.12.2018
 * Time: 21:42
 * Задание: http://php720.com/task/6 - "Создание сокращенного варианта ФИО"
 */
?>

<form method="post">
    <input type="text" name="lastName" value="<?= (isset($_POST['lastName'])) ? $_POST['lastName'] : '' ?>" placeholder="Фамилия">
    <input type="text" name="firstName" value="<?= (isset($_POST['firstName'])) ? $_POST['firstName'] : '' ?>" placeholder="Имя">
    <input type="text" name="middleName" value="<?= (isset($_POST['middleName'])) ? $_POST['middleName'] : '' ?>" placeholder="Отчество">
    <button type="submit" name="go">Войти</button>
</form>

<?php
// Проверяем, что нажата кнопка "Войти"
if (isset($_POST['go'])) {
    // Выводим сокращенный вариант ФИО
    echo $_POST['lastName'] . " " . mb_substr($_POST['firstName'], 0, 1) . ". " . mb_substr($_POST['middleName'], 0, 1) . ".";
}
