
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body align="center">
<h2>To Check total playment</h2>
<form action="" method="post">
    <label>Enter the Quntity:</label><input type="text" name="number">
    <input type="submit">
</form>
</body>
</html>

<?php

if($_POST)
{
    $number = $_POST['number'];
    $price = 3400.00;
    $discount = 0.45;
    $after_discount= $price * $discount;
    $minusDiscount = $price+$after_discount;
    $total = $minusDiscount * $number;

    echo "Original price : ".$price."<br>";
    echo "After Increase 45% per item : ".$minusDiscount."<br>";
    echo "Quantity : ".$number."<br>";
    echo "Total : ".$total."<br>";


}

?>