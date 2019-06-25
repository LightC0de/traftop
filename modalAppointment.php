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

$email = $_POST["email"];
$url = $_POST["url"];
$price = $_POST["price"];
$volume = $_POST["volume"];
$words = $_POST["words"];
$typePrice = $_POST["typePrice"];

if($typePrice == '') {
    $typePrice = "Простой";
}

$to = "bestallorder@gmail.com";
$subject = "Полная форма с тарифом";
$txt = "Email: " . $email
 . "\nUrl: " . $url
 . "\nКол-во просмотров: " . $price
 . "\nОбъем: " . $volume
 . "\nСлова: " . $words
 . "\nТип тарифа: " . $typePrice;

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