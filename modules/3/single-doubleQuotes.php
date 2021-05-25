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

    <h2>Quotes & Concat</h2>

    <!-- Script One -->
    <?php

    $number = 123;
    echo "The number is: $number";

    ?>

    <br>

    <!-- Script Two -->
    <?php

    $number = 123;
    echo "The number is: $number";
    echo '<br>';
    echo "Your code isn't bad, but it could be better";

    ?>

    <br>

    <!-- Script Three -->
    <?php

    $firstName = 'Alpha';
    $lastName = 'Beta';
    $myVar = 'Hi, my name is ' . $firstName . ' ' . $lastName . '.';
    echo $myVar;

    ?>

    <br>

    <!-- Script Four -->
    <?php

    $firstName = 'Alpha';
    $lastName = 'Beta';
    $myVar = "Hi, my name is $firstName $lastName.";
    echo $myVar;

    ?>

    <br>

    <h2>Type casting</h2>

    <!-- Type casting -->
    <?php

    $x = "13.3333";
    var_dump($x);
    echo "<br>";
    $y = (float) $x;
    var_dump($y);

    ?>



</body>

</html>