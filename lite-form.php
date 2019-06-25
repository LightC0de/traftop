<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Отправка письма</title>
</head>
<body>

<?php

$name = $_POST["name"];
$email = $_POST["email"];
$url = $_POST["url"];

$to = "n0975771178@gmail.com";
$subject = "Быстрая форма";
$txt = "Имя: " . $name . "\nEmail: " . $email . "\nUrl: " . $url;

if( mail($to,$subject,$txt,$headers) ) {
?>
    <h1 style="color: green">Письмо было успешно отправлено!</h1>
    <h2>Через секунду Вас перенаправит на главную - <a href="http://traftop.biz/">ссылка</a></h2>

    <?php } else { ?>

    <h1  style="color: red">Что-то пошло не так..</h1>
    <h2>Через секунду Вас перенаправит на главную - <a href="http://traftop.biz/">ссылка</a></h2>
    <?php } ?>
<script>setTimeout( 'location="http://traftop.biz/";', 2000 );</script>
</body>
</html>