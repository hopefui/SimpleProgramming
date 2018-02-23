
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body align="center">
<h2>To Check the Fahrenheit</h2>
<form action="" method="post">
    <label>Enter Celsius:</label><input type="text" name="number">
    <input type="submit">
</form>
</body>
</html>

<?php

if($_POST)
{
    $number = $_POST['number'];

    $ans = 9/5*($number+32);
    echo $number." Celsius are ".$ans." Fahrenheit";
}

?>