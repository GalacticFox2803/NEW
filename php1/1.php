<?php
//Задание 1 - Управляющие констукции + циклы
//Написать скрипт, считающий сумму цифр числа $a. Например: есть число 123, сумма цифр 1 + 2 + 3 = 6
//Проверить корректность данных: что вообще число, что целое и т.п.

echo 'Введите Исходное число: <form action="" method=post>';
echo '<input type=text name="ab" value=""><br><input type=submit></form>';

if (!isset($_POST['ab'])) {
    exit();
}

$a = $_POST['ab'];

if (!is_int($a)) {
    $type = 'НЕ число';
    if (is_numeric($a)) {
        $type = 'НЕ целое число';
    } elseif ($a === '') {
        $type = "Пустая строка";
    }
    echo "'{$a}' - " . $type;
    exit;
}


//обнуляем переменную
$sum = 0;
//приводим число к массиву
$b = str_split($a);
//ищем сумму
$sum = array_sum($b);

//выводи результат
echo "Исходное число: " . $a . "<br>";
echo "Сумма цифр исходного числа: " . $sum;