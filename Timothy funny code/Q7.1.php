<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body align="center">
<h2>To Check the Division</h2>
<form action="" method="post">
    <label>Enter a number 1:</label><input type="text" name="number1">
    <br>
    <label>Enter a number 2:</label><input type="text" name="number2">
    <br>
    <input type="submit">
</form>
</body>
</html>

<?php
if($_POST){
    $number1 = $_POST['number1'];
    $number2 = $_POST['number2'];


    function division($num1,$num2)
    {
        $ans=$num1/$num2;
        return $num1." / ".$num2." = ".$ans;
    }

    echo division($number1,$number2);
}


?>