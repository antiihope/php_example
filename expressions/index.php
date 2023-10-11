<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Expression</title>
</head>

<body>
    <!-- if statment -->
    <?php
    $a = 20;
    $b = 20;
    if ($a > $b) {
        echo "a is $a and it is greater than b";
    } elseif ($b > $a) {
        echo  "b is $b and it is greater than a";
    } else {
        echo "a is equal to b";
    }


    // muttiple logical expression and operator
    $a = 20;
    $b = 20;
    $c = 30;
    if ($a > $b && $a > $c) {
        echo "a is greater than b and c";
    } elseif ($b > $a && $b > $c) {
        echo "b is greater than a and c";
    } else {
        echo "c is greater than a and b<br>";
    }
    ?>

    <br>

    <?php
    // switch statement , which is really similar to javascript's switch statement
    $favcolor = "green";

    switch ($favcolor) {
        case "red":
            echo "Your favorite color is red!";
            break;
        case "blue":
            echo "Your favorite color is blue!";
            break;
        case "green":
            echo "Your favorite color is green!";
            break;
        default:
            echo "Your favorite color is neither red, blue, nor green!";
    }
    ?>



</body>

</html>