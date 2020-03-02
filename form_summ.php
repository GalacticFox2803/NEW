<?php header("Content-Type: text/html; charset=CP1251");

//Создать форму, для ввода двух чисел, после отправки вывести их сумму
//Добавить проверки на то что это положительные числа
//Если это строки – вывести их конкатенацию


$a = '';
$b = '';

if (isset($_POST['a'])) $a = $_POST['a'];
if (isset($_POST['b'])) $b = $_POST['b'];

$sum=0;
$c = str_split($a) && ($b);

switch ($_POST) {
case ($a < 0 || $b < 0):
echo 'Вы ввели отрицательные числа';
break;
case (is_numeric($a) === true && is_numeric($b) === true):
$sum= $a + $b;
echo 'Сумма чисел: ' . $sum;
break;
case (is_string($a) === true || is_string($b) === true):
echo 'Вы ввели строки: ' . $a . $b;
break;
}
