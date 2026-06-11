<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WAP to find sum of odd numbers from 1 to 100.</title>
</head>
<body>
    <form action="" method="post">
        <label for="sum">Find sum of odd numbers from 1 to 100.</label><br><br>
        <input type="submit" name="sum" value="Find Sum"><br><br>
    </form>
</body>
</html>
<?php
    if(isset($_POST['sum'])){
        $sum = 0;
        for ($i = 1; $i <= 100; $i++) {
            if ($i % 2 != 0) {
                $sum += $i;
            }
        }
        echo "<h3>Sum of odd nums from 1 to 100 : $sum</h3>";
    }
?>