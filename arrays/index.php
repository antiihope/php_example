<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays</title>
</head>


<body>
    <?php


    // Indexed arrays
    $arr = array("Hazem", "Karim", "Rafiq");
    echo implode(" ", $arr) . "<br>";

    // to print the whole array:
    print_r($arr);
    echo "<br>";

    // to print the length of the array:
    echo count($arr);
    echo "<br>";

    // associative arrays use named keys that you assign to them, similar an object in javascript
    // like this:
    $arr = array(
        "name" => "Hazem",
        "age" => 21,
        "id" => 123
    );
    echo $arr["name"] . "<br>";



    ?>
</body>

</html>