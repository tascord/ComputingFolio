<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../../extra/main.css">

    <title>Datatype testing!</title>

</head>

<body>

    <a href="../7.php" class="back">Back to 7.php</a>

    <h2>Datatypes!</h2>

    <p>

        <?php

        $data = NAN;

        echo 'Value: ' . $data . '<br>';

        switch (gettype($data)) {
            case 'integer':
            case 'double':
            case 'float':
                echo "Data Type: Number.";
                break;
            case 'boolean':
                echo "Data Type: Boolean.";
                break;
            case 'string':
                echo "Data Type: String.";
                break;
            case 'array':
                echo "Data Type: Array.";
                break;
            default:
                echo "Data Type: Unknown.";
                break;
        }

        ?>

    </p>

</body>

</html>