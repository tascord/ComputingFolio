<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../../extra/main.css">

    <title>Conditionals!</title>

</head>

<body>

    <a href="../7.php" class="back">Back to 7.php</a>

    <h2>Logic Gates!</h2>

    <?php

    $value = true;
    $smallNumber = 2;
    $bigNumber = 10;
    $fruit = 'apple';

    // If conditional
    if ($value === true) {
        echo '$value is true! <br>';
    }

    // If-Else conditional
    if ($smallNumber < $bigNumber) {
        echo '$smallNumber is smaller than $bigNumber! <br>';
    } else {
        echo '$bigNumber is smaller than $smallNumber! <br>';
    }

    //If-Else if-Else
    $a = 5;
    $b = 3;

    if ($a - $b) {
        if ($a > $b) {
            $difference = $a - $b;
        } else {
            $difference = $b - $a;
        }
        print("The difference is $difference <br>");
    } else {1
        print("The numbers are equal <br>");
    }

    // Switch
    switch ($fruit) {
        case "cherry":
            echo "The fruit is cherry.";
            break;
        case "banana":
            echo "The fruit is banana.";
            break;
        case "avocado":
            echo "The fruit is avocado.";
            break;
        default:
            echo "The fruit cannot be identified.";
            break;
    }

    ?>

</body>

</html>