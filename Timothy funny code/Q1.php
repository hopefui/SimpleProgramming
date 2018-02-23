
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body align="center">
<h2>To Check Even or Odd number</h2>
<form action="" method="post">
    <label>Enter a number:</label>
    <input type="text" name="number">
    <input type="submit">
</form>
</body>
</html>

<?php

if($_POST)
{
    $number = $_POST['number'];

    if ($number % 2 == 0) {
        echo $number." is an Even number";
    } else {
        echo $number." is an Odd number";
    }
}

?>