<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WAP to find factorial of a given number.</title>
</head>
<body>
    <form action="" method="post">
        <label for="number">Enter a number:</label>
        <input type="number" name="number" id="number" required><br><br>
        <input type="submit" name="factorial" value="Find Factorial"><br><br>
    </form>
</body>
</html>
<?php
    if(isset($_POST['factorial']) && isset($_POST['number'])){
       $num = (int)$_POST['number']; 
        $result = 1; 
        if ($num < 0) {
            echo "<h3>Factorial is not defined for negative numbers.</h3>";
        } 
        else if ($num == 0) {
            echo "<h3>The factorial of 0 is 1.</h3>";
        } 
        else {
            for ($i = $num; $i > 0; $i--) {
                $result = $result * $i;
            }
            echo "<h3>The factorial of $num is $result.</h3>";
        }
    }

?>