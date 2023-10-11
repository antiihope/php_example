<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strings</title>
</head>


<body>
    <?php
    // string length
    $str = "Hello world!";
    echo strlen($str); // outputs 12

    echo "<br />";
    // word count
    echo str_word_count($str); // outputs 2
    echo "<br />";

    // reverse string
    echo strrev($str); // outputs !dlrow olleH
    echo "<br />";

    // search for a specific text within a string
    echo strpos($str, "world"); // outputs 6
    echo "<br />";


    // replace text within a string
    echo str_replace("world", "Dolly", $str); // outputs Hello Dolly!
    echo "<br />";

    // converting string to array
    $str = "Hello world. It's a beautiful day.";
    print_r(explode(" ", $str)); // outputs Array ( [0] => Hello [1] => world. [2] => It's [3] => a [4] => beautiful [5] => day. )
    echo "<br />";

    // converting array to string
    $arr = array("Hello", "world!", "Beautiful", "day!");
    echo implode(" ", $arr); // outputs Hello world! Beautiful day!
    echo "<br />";

    // comparing strings
    $a = "Hello";
    $b = "Hello";
    if ($a == $b) {
        echo "The strings are equal";
    } else {
        echo "The strings are not equal";
    }
    echo "<br />";



    // concatenating strings
    $a = "Hello";
    $b = " world";
    echo $a . $b; // outputs Hello world
    echo "<br />";


    // repeat a string
    $str = "Hello";
    echo str_repeat($str, 5); // outputs HelloHelloHelloHelloHello

    echo "<br />";

    // trim a string
    $str = "   Hello world!   ";
    echo trim($str);
    echo "<br />";

    ?>


</body>

</html>