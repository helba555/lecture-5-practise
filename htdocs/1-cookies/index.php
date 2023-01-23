<?php

// 🧠 What if we want these to stick around after the browser is closed?

$mood = "";
if (isset($_GET['mood'])) {
    setcookie('mood', $_GET['mood'], strtotime('+1day'));  // thanks, https://www.php.net/manual/en/function.setcookie.php (walterquez)
    $mood = $_GET['mood'];
} else if (isset($_COOKIE['mood'])) {
    $mood = $_COOKIE['mood'];
}



// 🧠 What if we want to delete a cookie?

// https://www.php.net/manual/en/function.setcookie.php (Bachsau)

setcookie('mood', $_COOKIE['mood'], 1);



require 'index.view.php';
