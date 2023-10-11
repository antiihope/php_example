<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>user home page</title>
</head>

<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // get item from the post request
        $username = $_POST["username"];
        $password = $_POST["password"];
    }
    // check if the username and password are correct
    if ($username == "admin" && $password == "123") {
        echo "Welcome " . $username;
    } else {
        echo "Wrong username or password , Redirecting to login page..";
        // refresh page after 2 seconds
        header("refresh:2; url=index.php");
    }
    ?>
</body>

</html>