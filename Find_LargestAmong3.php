<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WAP to find largest among three numbers.</title>
</head>
<body>
    <form action="" method="post">
        <label for="num1">Enter the first number:</label>
        <input type="number" name="num1" id="num1" required><br><br>

        <label for="num2">Enter the second number:</label>
        <input type="number" name="num2" id="num2" required><br><br>

        <label for="num2">Enter the third number:</label>
        <input type="number" name="num3" id="num3" required><br><br>

        <input type="submit" value="find_LargestNum"><br><br>

    </form>
</body>
</html>
<?php
    if(isset($_POST['num1']) && isset($_POST['num2']) && isset($_POST['num3'])){
        $num1=$_POST['num1'];
        $num2=$_POST['num2'];
        $num3=$_POST['num3'];
        
        if($num1==$num2 && $num2==$num3){
            echo"<h3>All are equal numbers</h3>";
        } else if($num1>=$num2 && $num1>=$num3){
                echo"<h3>$num1 is the largest number.</h3>";
        } else if($num2>=$num1 && $num2>=$num3){
                echo"<h3>$num2 is the largest number.</h3>";
        } else if($num3>=$num1 && $num3>=$num2){
                 echo"<h3>$num3 is the largest number.</h3>";
        } else{
            echo"<h3>Invalid input</h3>";
        }
    }
?>