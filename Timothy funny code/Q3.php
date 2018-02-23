
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body align="center">
<h2>To Check the Square root of number</h2>
<form action="" method="post">
    <label>Enter a number:</label><input type="text" name="number">
    <input type="submit">
</form>
</body>
</html>

<?php
if($_POST) {
    $number = $_POST['number'];

    function square($num1)
    {
        $ans=(pow($num1,2));
        return "The Square of ".$num1." is ".$ans;
    }

    echo square($number);
}
?>