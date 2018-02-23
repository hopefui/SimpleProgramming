
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body align="center">
<h2>To Check the Maximum value</h2>
<form action="" method="post">
    <label>Enter a number 1:</label><input type="text" name="number1">
    <br>
    <label>Enter a number 2:</label><input type="text" name="number2">
    <br>
    <label>Enter a number 3:</label><input type="text" name="number3">
    <br>
    <input type="submit">
</form>
</body>
</html>

<?php
if($_POST){
    $number1 = $_POST['number1'];
    $number2 = $_POST['number2'];
    $number3 = $_POST['number3'];


    function maximum($num1,$num2,$num3)
    {
        $ans=(max($num1,$num2,$num3));
        return "The Maximum of ".$num1." , ".$num2." and ".$num3." are ".$ans;
    }

    echo maximum($number1,$number2,$number3);
}

?>