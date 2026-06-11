<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> WAP to find sum of numbers from 5 to 100.</title>
</head>
<body>
    <form action="" method="post">
        <label for="sum">Find sum of numbers from 5 to 100 :</label><br><br>
        <input type="submit" name="sum" value="Find Sum"><br><br>
    </form>
</body>
</html>
<?php
    if(isset($_POST['sum'])){
        $sum=0;
        for($i=5; $i<=100; $i++){
            $sum+=$i;
        }
        echo"<h3>The sum of numbers from 5 to 100 is : $sum</h3>";
    }
?>