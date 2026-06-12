<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WAP to read a no. & find out if it is Armstrong no. or not.</title>
</head>
<body>
    <form action="" method="post">
        <label for="number">Enter a number to check if Armstrong or not :</label><br><br>
        <input type="number" name="number" required><br><br>

        <input type="submit" name="print" value="Check"><br><br>
    </form>
</body>
</html>
<?php
    if(isset($_POST['number']) && isset($_POST['print'])){

        $num=$_POST['number'];
        $check_val=$num;
        while($num!=0){
            $rem=$num%10;
            $a=$rem*10+$rem;
            $num=$num/10;
            }

        if($check_val==$a)
            echo"<h3>Yes, $check_val is an Armstrong number !</h3>";
        else
           echo"<h3>Yes, $check_val is not an Armstrong number !</h3>"; 
    }

?>