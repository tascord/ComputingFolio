<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../../extra/main.css">

    <style>
        form div {

            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;

            width: 100%;
            height: 10vh;

        }

        form div:last-of-type {
            align-items: flex-start;
        }

        sup {
            color: red;
        }

        label {
            font-size: 1.2rem;
            font-weight: 200;
        }

        button {
            width: fit-content;
        }
    </style>

    <title>Output</title>

</head>

<body>

    <a href="../2.php" class="back">Back to 2.php</a>

    <?php

    echo "<h1>E-Pay International</h1>";
    echo "<br>";
    echo "<strong>Here is some data</strong>";

    echo "<table>";
    echo "<tr><td>0</td><td>1<td/></tr>";
    echo "<tr><td>2</td><td>3<td/></tr>";
    echo "</table>";
    echo "<br>";

    echo "<p>Give me your credit card number \u{2766} \u{1F339} \u{2728}</p>";
    echo "<form>";
    echo "<input type=\"text\" /><br>";
    echo "<input type=\"submit\" />";
    echo "</form>";

    ?>

</body>

</html>