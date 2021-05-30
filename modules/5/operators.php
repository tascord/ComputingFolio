<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../../extra/main.css">

    <title>Operators!</title>

</head>

<body>

    <a href="../5.php" class="back">Back to 5.php</a>

    <h2>Operators</h2>

    <p>
        <?php

        $name = "VSV student";
        $age = 17;
        $hourlyRate = 10.50;
        $hours = 10;

        $weeks = 52;
        $weeklyPay = $hourlyRate * $hours;
        $salary = $weeklyPay * $weeks;

        echo $name . " is " . $age . " years old.\n" . "<br>";
        echo $name . " makes $" . $hourlyRate . " an hour. \n" . "<br>";
        echo $name . " worked " . $hours . " hours this week. \n" . "<br>";
        echo $name . " will make $" . $salary . " this year. (" . $weeks . " weeks)" . "<br>"; 

        ?>
    </p>

</body>

</html>