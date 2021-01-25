<?php

$recepient = "kernyakevuch33@gmail.com";
$sitename = "SVGO Itd";

$name = trim($_POST["name"]);
$phone = trim($_POST["phone"]);
$text = trim($_POST["text"]);
$message = "Name: $name \nEmail: $phone \nText: $text";

$pagetitle = "new massage \"$sitename\"";
mail($recepient, $pagetitle, $message, "Content-type: text/plain; charset=\"utf-8\"\n From: $recepient");