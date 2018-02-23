
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body align="center">
<h2>To Check Average</h2>
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
if($_POST) {
    $number1 = $_POST['number1'];
    $number2 = $_POST['number2'];
    $number3 = $_POST['number3'];

    function average($num1, $num2, $num3)
    {
        $sum = $num1 + $num2 + $num3;
        $average = $sum / 3;
        return 'The average are ' . $average;
    }

    echo average($number1, $number2, $number3);
}
?>