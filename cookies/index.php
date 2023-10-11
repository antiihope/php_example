<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookies</title>
</head>

<body>
    <?php
    setcookie('name', 'Hazem', time() + (60 * 60 * 24 * 7)); // 1 week

    // to get the cookie value
    echo $_COOKIE['name'];

    ?>
</body>

</html>