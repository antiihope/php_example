<?php

session_start();
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sessions</title>
</head>

<body>
    <?php
    // setcookie('name', 'Hazem', time() + (60 * 60 * 24 * 7)); // 1 week

    $_SESSION['name'] = 'Hazem';
    // to get the cookie value
    $name =  $_SESSION['name'];
    echo $name;

    ?>
</body>

</html>