<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../../extra/main.css">

    <title>Single & Double Quotes!</title>

</head>

<body>

    <a href="../3.php" class="back">Back to 3.php</a>

    <!-- Script One -->
    <?php

    $number = 123;

    echo "The number is: $number";

    // will print: The number is: 123

    ?>

    <!-- Script Two -->
    <?php

    $number = 123;

    echo "The number is: $number";

    // will print: The number is: 123

    echo '<br>';

    echo "Your code isn't bad, but it could be better";

    // Your code isn't bad, but it could be better

    ?>

    <!-- Script Three -->
    <?php
    $firstName = 'Alpha';
    $lastName = 'Beta';
    $myVar = "Hi, my name is $firstName $lastName.";
    echo $myVar;
    ?>



</body>

</html>