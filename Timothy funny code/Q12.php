<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body align="center">
<form action="" method="post">
    <label>Enter QTY of family members :</label><input type="text" name="number1">
    <br>
    <input type="submit">
</form>
</body>
</html>

<?php
if($_POST){
    $number1 = $_POST['number1'];
    $number2 = 50.00;


    function multiplication($num1,$num2)
    {
        $ans=$num1*$num2;
        $ans1 = number_format((float)$ans, 2,'.','');
        return "Total of RM".$ans1;
    }

    echo multiplication($number1,$number2);
}


?>