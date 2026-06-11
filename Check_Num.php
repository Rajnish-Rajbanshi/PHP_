<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> WAP to check whether a number is odd or even.</title>
</head>
<body>
    <form action="" method="post">
        <label for="number">Enter the number :</label>
        <input type="number" name="number" id="number" required><br><br>

        <input type="submit" value="Check_Num"><br><br>
    </form>
</body>
</html>
<?php
    if(isset($_POST['number'])){
        $num=$_POST['number'];
        if($num%2==0){
            echo"<h3>$num is an Even number.</h3>";
        } else{
           echo"<h3>$num is an Odd number.</h3>"; 
        }
    }
?>