<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="Product.php" method="post">
    <label>Enter first number:</label>
    <input type="number" name="num1" id="num1" required><br><br>

    <label>Enter second number:</label>
    <input type="number" name="num2" id="num2" required><br><br>

    <input type="submit" value="Calculate Product"><br>

    </form>
</body>
</html>
<?php
if(isset($_POST['num1']) && isset($_POST['num2'])) {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $product = $num1 * $num2;
    echo "<h2>Product: " . $product . "</h2>";
}
?>