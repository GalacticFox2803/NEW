<?php
//Создать форму, для ввода двух чисел, после отправки вывести их сумму
//Добавить проверки на то что это положительные числа
//Если это строки – вывести их конкатенацию

$a = $_POST['a'];
$b = $_POST['b'];
switch ($_POST) {
    case ($a < 0 || $b < 0):
        echo 'Вы ввели отрицательные числа';
        break;
    case (is_numeric($a) === true && is_numeric($b) === true):
        echo 'Сумма чисел: ' . $a + $b;
        break;
    case (is_string($a) === true || is_string($b) === true):
        echo 'Вы ввели строки: ' . $a . $b;
        break;
}
