<?php header("Content-Type: text/html; charset=CP1251");

//Сделать эту форму доступной только авторизованным пользователям:
//Создать простую форму регистрации (ФИО, телефон, e-mail), проверить корректность ее заполнения
//Добавить к форме регистрации поле с файлом резюме, организовать его сохранение
//*Организовать сохранение зарегистрированных пользователей


if (isset($_POST['send'])) {
$surname = $_POST['surname'];
$name = $_POST['name'];
$tel = $_POST['tel'];
$email = $_POST['email'];
$pass = $_POST['pass'];
$file = $_FILES['file']['name'];

$f = fopen('file.txt', 'a');
fwrite ($f, 'Фамилия: ' . $surname . "\n");
fwrite ($f, 'Имя: ' . $name . "\n");
fwrite ($f, 'Телефон: ' . $tel . "\n");
fwrite ($f, 'e-mail: ' . $email . "\n");
fwrite ($f, 'Пароль: ' . $pass . "\n");
fwrite ($f, 'Резюме: ' . $file . "\n");
fwrite ($f, '    ' . "\n");
fclose($f);

setcookie("Cookie", $email . $pass , time()+10800);
header("Location: http://localhost/summ.html");
}


