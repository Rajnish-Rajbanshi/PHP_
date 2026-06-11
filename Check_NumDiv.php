<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WAP to check whether a number  is divisible by 7 but not by 13</title>
</head>
<body>
    <form action="" method="post">
        <label for="number">Enter the number to divide by 7 but not 13 : </label>
        <input type="number" name="number" id="number" required><br><br>

        <input type="submit" value="Check_Num"><br><br>

    </form>
</body>
</html>
<?php
    if(isset($_POST['number'])){
        $num=$_POST['number'];
        if($num%7==0 && $num%13!=0){
            echo"<h3>$num is exactly divisible by 7 but not 13.</h3>";
        } else{
            echo"<h3>$num is not divisible by 7 or is divisible by 13 .</h3>";
        }
    }

?>