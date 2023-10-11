<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loops</title>
</head>

<body>


    <?php

    // while loop:
    // $counter = 0;
    // while ($counter <= 10) {
    //     echo $counter . "<br>";
    //     $counter++;
    // }
    // echo $counter
    ?>

    <br>
    <?php

    // for loop
    for ($counter = 0; $counter <= 10; $counter++) {
        // To skip over an iteration you can do this:
        if ($counter == 5) {
            continue;
        }
        // this now will output all numbers except 5
        echo $counter . "<br>";
    }



    // foreach loop
    $arr = array(1, 2, 3, 4, 5, 6, 7, 8, 9);
    foreach ($arr as $value) {
        // and to break the loop completly , you can do this:
        if ($value == 5) {
            break;
        }
        // this will output all numbers until 4
        echo $value . "<br>";
    }


    // foreach loop with associative array

    $arr = array("name" => "Hazem", "age" => 21, "id" => 123);
    foreach ($arr as $key => $value) {
        echo $key . " : " . $value . "<br>";
    }

    ?>
</body>

</html>