<html>

<head>

    <!-- intialize an array and choose a random item from it to be used later -->
    <?php
    $items = array("cyborg", "banana", "brainstorm", "cat", "lion");
    $randomIndex = rand(0, count($items) - 1);
    $randomItem = $items[$randomIndex];
    $arrayToString = implode(", ", $items);
    echo "<pre> <title>A picture of $randomItem</title>"; // set the title of the page to be the random item
    ?>

    <meta name="viewport" content="width=device-width, initial-scale=0">
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h2>
        <?php
        echo "A picture of $randomItem <br>";
        echo "Choosen from the following items: $arrayToString";
        ?>
    </h2>

    <?php
    // use the random item to get a random image from unsplash
    $url = "https://source.unsplash.com/500x500/?" . $randomItem;
    echo "<img src='$url' alt='A picture of $randomItem'>"; // display the image
    ?>

    <!-- listen for coming post requets -->
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // get item from the pos363605230002t request
        $randomItem = $_POST["item"];
        // use the random item to get a random image from unsplash
        $url = "https://source.unsplash.com/500x500/?" . $randomItem;
        echo "<img src='$url' alt='A picture of $randomItem'>"; // display the image

    }
    ?>


    <form action="index.php" method="post">
        <input type="text" name="item" placeholder="Enter an item"> <br> <br> <!-- allow the user to enter a new item -->
        <input type="submit" value="Get a new picture">
    </form>


</body>

</html>