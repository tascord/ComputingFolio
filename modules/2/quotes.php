<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../../extra/main.css">

    <title>Quotes!</title>

</head>

<body>

    <a href="../2.php" class="back">Back to 2.php</a>

    <?php

    // Fails!
    // echo "<h5 class="aFailure">PHP poggers</h5>";

    // Works (Escaped)
    echo "<h5 class=\"notAFailure\">PHP poggers</h5>";
    
    // Works (Single quote)
    echo "<h5 class='notAFailure'>PHP poggers</h5>";

    ?>

</body>

</html>