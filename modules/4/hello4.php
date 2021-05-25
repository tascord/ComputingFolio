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

    <a href="../4.php" class="back">Back to 4.php</a>

    <?php

    echo "Hello World!<br>";
    $name = "Alberta";

    echo "My name is " . $name . "<br>";
    echo "My name is " . $NAME . "<br>";
    echo "My name is " . $Name . "<br>";

    ?>

</body>

</html>