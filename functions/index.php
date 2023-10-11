<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Function</title>
</head>

<body>

    <?php
    // syntax is similar to javascript, 
    // and if you wanna access a variable outside the scope, you have to use 'global' keyword .. like pytohn
    function sayHi($name, $age)
    {
        echo "Hello $name, you are $age <br>";
    }
    sayHi("Hazem", 24);



    // scope
    $name = "Hazem";
    function sayName()
    {
        global $name;
        echo $name;
        return "\n i echoed the name";
    }
    echo sayName();
    ?>
</body>

</html>