<?php
/**
 * Created by PhpStorm.
 * User: lozunoff
 * Date: 02.12.2018
 * Time: 22:01
 * Задание: http://php720.com/task/7 - "Определения положения стрелки часов"
 */
?>

<form method="post">
    <input type="number" name="deg" value="<?= (isset($_POST['deg'])) ? $_POST['deg'] : '' ?>" placeholder="Введите градус">
    <button type="submit" name="go">Посчитать</button>
</form>

<?php
// Проверяем, что нажата кнопка "Посчитать" и что передано не пустое значение вместо градусов
if (isset($_POST['go']) && $_POST['deg'] !== '') {
    // Считаем количество прошедших часов
    $hour = floor(12 / 360 * $_POST['deg']);
    // Выводим сообщение
    switch ($hour) {
        case 1:
            $msg = "Прошел %d час!";
        break;
        case 2:
        case 3:
        case 4:
            $msg = "Прошло %d часа!";
        break;
        default:
            $msg = "Прошло %d часов!";
        break;
    }
    echo sprintf($msg, $hour);
}
