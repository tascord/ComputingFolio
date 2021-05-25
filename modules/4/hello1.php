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

    <title>Hello world &mdash; v1 v2</title>

</head>

<body>

    <a href="../4.php" class="back">Back to 4.php</a>

    <h2>
        <?php echo "Hello, " . (isset($_GET['myName']) ? $_GET['myName'] : "World") . "!" ?>
    </h2>

    <form action="#" method="GET" enctype="application/x-www-form-urlencoded">

        <div>
            <label for="message">Your name<sup>*</sup></label>
            <input type="text" name="myName" id="myName" placeholder="Your name" required>
        </div>

        <div>
            <button type="submit">Submit!</button>
        </div>


    </form>

</body>

</html>