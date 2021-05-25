<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../extra/main.css">

    <style>
        /* Something should go here */
    </style>

    <title>test.php</title>

</head>

<body>

    <?php

    $Fname = "Oscar";
    $Lname = "Hill";

    function make_full_name($first, $last)
    {
        print $first . ' ' . $last . "<br>";
    }

    make_full_name('first name', 'last name');
    make_full_name("Jo", "Smith");
    make_full_name($Fname, $Lname);

    ?>


</body>

</html>