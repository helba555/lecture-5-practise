<?php
// http://127.0.0.1:8080/2-session-state/page1.php

// session_start();

// 🧠 What does following statement do?
// 🧠 How can we put things into the session store?
// 🧠 How can we get things out of the session store?



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page One</title>
</head>

<body>
    <h1>Page One - I'm Looking In Session Storage</h1>
    <a href="page2.php">to page 2</a>
    <br>
    <!-- 🧠 If we uncomment the following before doing a session_start, what happens? Why? -->
    <!-- <?= var_dump($_SESSION) ?> -->
</body>

</html>