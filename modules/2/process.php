<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../../extra/main.css">

    <style>
        
        h2 {
            margin-bottom: 0;
        }

        body * {
            width: unset;
        }

    </style>

    <title>Survey &mdash; Results!</title>

</head>

<body class="full">

    <a href="form.html" class="back">Back to form.html</a>

   <h2>Thank you for your submission!</h2>
   <sub>Your data is as follows</sub>

   <ul>
       <li><span class="accent">Name:</span> <?php echo $_POST["name"] ?></li>
       <li><span class="accent">Email:</span> <?php echo $_POST["email"] ?></li>
       <li><span class="accent">Favorite Flavour:</span> <?php echo $_POST["flavour"] ?></li>
   </ul>

</body>

</html>