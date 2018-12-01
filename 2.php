<?php
/**
 * Created by PhpStorm.
 * User: lozunoff
 * Date: 01.12.2018
 * Time: 22:27
 * Задание: http://php720.com/task/2 - "Проверить количество вхождения цифры в число"
 */
?>

<form method="get">
    <input type="number" name="num" value="<?= (isset($_GET['num'])) ? $_GET['num'] : '' ?>" placeholder="Введите число">
    <input type="number" name="n" value="<?= (isset($_GET['n'])) ? $_GET['n'] : '' ?>" placeholder="Какую цифру ищем?">
    <button type="submit" name="go" value="go">Посчитать</button>
</form>

<?php
// Проверяем, что нажата кнопка "Посчитать"
if (isset($_GET['go'])) {
    // Проверяем, что оба введенных значения являются числами
    if (filter_var($_GET['num'], FILTER_VALIDATE_INT) !== false
            && filter_var($_GET['n'], FILTER_VALIDATE_INT) !== false) {
        // Считаем количество вхождений
        echo "Количество вхождений: " . substr_count($_GET['num'], $_GET['n']);
    } else {
        echo "Введнное значение не является числом!";
    }
}
?>
