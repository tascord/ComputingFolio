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

        sub {
            font-size: 1rem;
            font-weight: bolder;
        }

    </style>

    <title>Height converter</title>

</head>

<body>

    <a href="../4.php" class="back">Back to 4.php</a>

    <h2>Height converter</h2>
    <sub style="visibility: <?php print(isset($_GET['cm']) ? 'visible' : 'hidden') ?>">
        <span class="accent"><?php print($_GET['cm']) ?></span>cm is equal to 
        <span class="accent"><?php print((int) $_GET['cm'] / 100) ?></span>m
    </sub>

    <form action="#" method="GET" enctype="application/x-www-form-urlencoded">

        <div>
            <label for="message">Centimeters<sup>*</sup></label>
            <input type="number" name="cm" id="cm" placeholder="100cm" required>
        </div>

        <div>
            <button type="submit">Submit!</button>
        </div>


    </form>

</body>

</html>