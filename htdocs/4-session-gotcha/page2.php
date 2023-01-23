<?php

// http://127.0.0.1:8080/2-session-state/page2.php

// session_start();


// 🧠 What if we try to do the following without a session_start?
// $_SESSION['foo'] = 123;
// $_SESSION['logged_in'] = true;
// $_SESSION['user_name'] = "Mr. Tripply";


// 🧠 What kind of things can we write in here?

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page Two</title>
</head>

<body>
    <h1>Page Two - I'm Writing To Session Storage</h1>
    <a href="page1.php">to page 1</a>
    <?= var_dump($_SESSION) ?>
</body>

</html>