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

switch ($price) {
    case 100000:
        if ($typePrice == "Простой") {
            $total = 7000;
        } else {
            $total = 10000;
        }
    break;
    case 60000:
        if ($typePrice == "Простой") {
            $total = 4500;
        } else {
            $total = 7000;
        }
    break;
    case 30000:
        if ($typePrice == "Простой") {
            $total = 3000;
        } else {
            $total = 5000;
        }
    break;
    case 10000:
        if ($typePrice == "Простой") {
            $total = 1200;
        } else {
            $total = 2500;
        }
    break;
}

$to = "bestallorder@gmail.com";
$subject = "Полная форма с тарифом";
$txt = "Email: " . $email
 . "\nUrl: " . $url
 . "\nКол-во просмотров: " . $price
 . "\nОбъем: " . $volume
 . "\nСлова: " . $words
 . "\nТип тарифа: " . $typePrice;

mail($to,$subject,$txt,$headers);

$merchant_id = '149411';
$secret_word = 'd544hyar';
$total2 = strip_tags($total);	
$email2 = strip_tags($email);	
$sign = md5($merchant_id.':'.$total2.':'.$secret_word.':'.$email2);
header('Refresh: 0; URL=http://www.free-kassa.ru/merchant/cash.php?m='.$merchant_id.'&oa='.$total2.'&s='.$sign.'&o='.$email2);