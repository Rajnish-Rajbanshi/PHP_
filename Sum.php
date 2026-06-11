<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WAP to find sum of two numbers.</title>
</head>
<body>
    <form action="Sum.php" method="post">

        <label for="num1">Enter first number:</label>
        <input type="number" id="num1" name="num1" required><br><br>

        <label for="num2">Enter second number:</label>
        <input type="number" id="num2" name="num2" required><br><br>
        <input type="submit" value="Calculate Sum"><br>

    </form>
    <?php
    if(isset($_POST['num1']) && isset($_POST['num2'])) {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $sum = $num1 + $num2;
        echo "<h2>Sum: " . $sum . "</h2>";
    }
    
    ?>
</body>
</html>
