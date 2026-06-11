<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WAP to check whether a number is divisible exactly by 5 and 10.</title>
</head>
<body>
    <form action="" method="post">
    <label for="number">Enter the number to divide exactly by 5 and 10 : </label>
    <input type="number" name="number" id="number" required><br><br>

    <input type="submit" value="Check_Num"><br><br>

    </form>
</body>
</html>
<?php
    if(isset($_POST['number'])){
        $num=$_POST['number'];
        if($num%5==0 && $num%10==0){
            echo"<h3>$num is exactly divisible by 5 and 10 .</h3>";
        } else{
            echo"<h3>$num is not exactly divisible by 5 and 10 .</h3>";
        }
    }

?>