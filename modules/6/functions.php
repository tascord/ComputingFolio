<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../../extra/main.css">

    <style>

    select, sub {
    
        margin-bottom: 20px;
        
    }

    </style>

    <title>Coupons!</title>

</head>

<body>

    <a href="../6.php" class="back">Back to 6.php</a>

    <?php

    $price = (float) (isset($_GET['cost']) ? $_GET['cost'] : 0);  # $
    $discount = (float) (isset($_GET['discount']) ? $_GET['discount'] : 0); # %

    function handleCoupon($originalPrice, $coupon)
    {

        $discountValue = $originalPrice * ($coupon / 100);
        return $originalPrice - $discountValue;
    }

    ?>

    <h2>Coupon Calculator</h2>
    <sub style="display: <?= isset($_GET['discount']) && isset($_GET['cost']) ? 'unset' : 'none' ?>">
        <span class="accent"><?= $discount ?>%</span> off
        <span class="accent">$<?= $price ?></span> is
        <span class="accent">$<?= handleCoupon($price, $discount) ?></span>
    </sub>

    <form action="#">

        <label for="cost">Product</label>
        <select name="cost" id="cost">
            <option value="3.59">Milk &mdash; $3.59</option>
            <option value="1.80">Sugar &mdash; $1.80</option>
            <option value="1.00">Flour &mdash; $1.00</option>
            <option value="67.00">Flowers &mdash; $67.00</option>
            <option value="11.00">Toilet Paper &mdash; $11.00</option>
            <option value="2.85">Soap &mdash; $2.85</option>
            <option value="1.90">Shampoo &mdash; $1.90</option>
            <option value="3.50">Conditioner &mdash; $3.50</option>
            <option value="36.00">Shower Heads &mdash; $36.00</option>
            <option value="0.53">Mandarin &mdash; $0.53</option>
        </select>

        <label for="discount">Coupon</label>
        <select name="discount" id="discount">
            <option value="10">New Member Discount &mdash; 10% Off</option>
            <option value="20">Christmas Sale &mdash; 20% Off</option>
            <option value="5">Member Discount &mdash; 5% Off</option>
            <option value="75">Closing Down Sale &mdash; 75% Off</option>
            <option value="62">Executive Discount &mdash; 62% Off</option>
        </select>

        <button type="submit">Calculate</button>

    </form>

</body>

</html>