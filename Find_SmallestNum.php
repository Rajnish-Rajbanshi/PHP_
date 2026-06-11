<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WAP to find smallest among two numbers.</title>
</head>
<body>
    <form action="Find_SmallestNum.php" method="post">
        <label for="num1">Enter the first number:</label>
        <input type="number" name="num1" id="num1" required><br><br>

        <label for="num2">Enter the second number:</label>
        <input type="number" name="num2" id="num2" required><br><br>

        <input type="submit" value="find_SmallestNum"><br><br>
    </form>
</body>
</html>
<?php
    if(isset($_POST['num1']) && isset($_POST['num2'])){
        $num1=$_POST['num1'];
        $num2=$_POST['num2'];
        
        if($num1!=$num2){
            if($num1<$num2){
                echo"<h3>$num1 is the smallest number.</h3>";
            } else{
            echo"<h3>$num2 is the smallest number.</h3>";
            }
        } else{
            echo"<h3>Both are equal numbers</h3>";
        }
    }
?>