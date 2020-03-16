<?php header("Content-Type: text/html; charset=CP1251");
//Задание 1 - Управляющие констукции + циклы
//Написать скрипт, считающий сумму цифр числа $a. Например: есть число 123, сумма цифр 1 + 2 + 3 = 6
//Проверить корректность данных: что вообще число, что целое и т.п.

echo 'Введите Исходное число: <form action="" method=post>';
echo '<input type=text name="ab" value=""><br><input type=submit></form>';
$a = '';

if(isset($_POST['ab']))
{
$a=$_POST['ab'];
}
else exit();

$pos1 = stripos($a, '.');
$pos2 = stripos($a, ',');
if ($pos1 || $pos2) {
        echo "'{$a}' - не целое число";
    } else if(is_numeric($a)){
//обнуляем переменную
$sum=0;
//приводим число к массиву
$b = str_split($a);
//ищем сумму 
$sum=array_sum($b);

//выводи результат
echo "Исходное число: " . $a . "<br>";
echo "Сумма цифр исходного числа: " . $sum;
}
else if ($a=='') { echo "Пустая строка"; exit;} 
else {echo "'{$a}' - НЕ число";}