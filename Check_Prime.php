<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WAP to check whether a number is prime or not.</title>
</head>
<body>
    <form action="" method="post">
        <label for="number">Enter a number to check prime or not :</label>
        <input type="number" name="number"><br><br>

        <input type="submit" value="Check_Prime" name="print">
    </form>
</body>
</html>
<?php
    if(isset($_POST['print']) && isset($_POST['number'])){
        $num=$_POST['number'];
        $freq=null;
        for($i=1;$i<=$num;$i++){
            if($num%$i==0){
                $freq++;
            }
        }
        if($freq<=2){
            echo"<h3>$num is prime number.</h3>";
        } else{
            echo"<h3>$num is not a prime number.</h3>";
        }
    }
?>