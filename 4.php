<?php
/**
 * Created by PhpStorm.
 * User: lozunoff
 * Date: 01.12.2018
 * Time: 23:03
 * Задание: http://php720.com/task/4 - "Найти максимальное и минимальное значение массива"
 */

// Объявляем массив
$arr = [];

// Заполняем массив случайными значениями
for ($i = 0; $i < 10; $i++) {
    $arr[] = rand(0, 100);
}

// Выводим массив до изменения
var_dump($arr);

// Получаем минимальное значение массива
$min = min($arr);
// Получаем максимальное значение массива
$max = max($arr);

// Получаем ключ минимального значения массива
$min_key = array_search($min, $arr);
// Получаем ключ максимального значения массива
$max_key = array_search($max, $arr);

// Меняем значения местами
$arr[$min_key] = $max;
$arr[$max_key] = $min;

// Выводим массив после изменения
var_dump($arr);
