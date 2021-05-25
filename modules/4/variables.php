<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../../extra/main.css">

    <title>Wages!</title>

</head>

<body>

    <a href="../4.php" class="back">Back to 4.php</a>

    <h2>Wages</h2>

    <p>
        <?php

        $name = "VSV student";
        $age = 17;
        $hourlyRate = 10.50;
        $hours = 10;
        echo $name . " is " . $age . " years old.\n" . "<br>";
        echo $name . " makes $" . $hourlyRate . " an hour. \n" . "<br>";
        echo $name . " worked " . $hours . " hours this week. \n" . "<br>";

        ?>
    </p>

</body>

</html>