<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../../extra/main.css">

    <title>Date & Time!</title>

</head>

<body>

    <a href="../6.php" class="back">Back to 6.php</a>

    <br><br><br>

    <h2>Date & Time!</h2>
    <p>
        <?php
        echo "Time index: ";
        print time();
        echo "<br>";
        echo "The time is: : ";
        print date("H:i");

        echo "<br>";
        echo "<br>";

        $date_array = getdate();

        foreach ($date_array as $key => $val) {
            print "$key = $val<br />";
        }

        $formatted_date = "Today's date: ";
        $formatted_date .= $date_array['mday'] . "/";
        $formatted_date .= $date_array['mon'] . "/";
        $formatted_date .= $date_array['year'];

        print "<br>" . 'An example' . "<br>";
        print $formatted_date;
        echo "<br>";

        print "<br>" . 'More examples' . "<br>";
        "<br>";
        echo "Today is " . date("Y/m/d") . "<br>";
        echo "Today is " . date("Y.m.d") . "<br>";
        echo "Today is " . date("Y-m-d") . "<br>";
        echo "Today is " . date("l");
        echo " " . date("d.m.y") . "<br>";
        echo "Today is " . date("l") . " " . date("d.m.Y") . "<br>";
        echo "<br>";

        //de-limiter required
        print date("jS of F Y");
        echo "<br>";
        print date("jS \of F Y");
        echo "<br>";
        echo "<br>";

        //New York time
        date_default_timezone_set("America/New_York");
        echo "New York time is " . date("h:i:sa");
        echo "<br>";
        //Melbourne time
        date_default_timezone_set("Australia/Melbourne");
        echo "Melbourne time is " . date("h:i:sa") . "<br>";
        echo "<br>";
        // date() function is embedded between two other strings,which makes for particularly neat output:
        print "Christmas is on a " . date("l", strtotime("25 Dec 2010")) . " this year.";
        echo "<br>";
        print "The day yesterday was a " . date("l", time() - 86400);
        echo "<br>";

        ?>

    </p>

</body>

</html>