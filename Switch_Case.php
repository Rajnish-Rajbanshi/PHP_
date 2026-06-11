<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WAP to add, subtract, multiply and divide two numbers</title>
</head>
<body>
    <form action="Switch_Case.php" method="post">
        <label>Enter a choice(1-4):</label>
        <input type="number" name="choice" id="choice" required><br><br>

        <label>Enter first number:</label>
        <input type="number" name="num1" id="num1" required><br><br>

        <label>Enter second number:</label>
        <input type="number" name="num2" id="num2" required><br><br>

        <input type="submit" value="Calculate"><br>

    </form>
</body>
</html>
<?php
    if(isset($_POST['choice']) && isset($_POST['num1']) && isset($_POST['num2'])){
    $choice=$_POST['choice'];
    $num1=$_POST['num1'];
    $num2=$_POST['num2'];
    $total=null;
    switch ($choice) {
       
    case 1:  //add
            $total=$num1+$num2;
            echo"<h3>Sum of $num1 and $num2 : $total</h3>";
            break;
        
    case 2:     //subtraction
            $total=$num1-$num2;
             echo"<h3>Subtraction of $num1 and $num2 : $total</h3>";
            break;
    case 3:     //multiplication
             $total=$num1*$num2;
             echo"<h3>Multiplication of $num1 and $num2 : $total</h3>";
            break;
    case 4:
            if($num2!=0){
               $total=$num1/$num2;
                echo"<h3>Division of $num1 and $num2 : $total</h3>"; 
            } else
                echo"<h3>Division can't be done, as denominator is 0 !</h3>";
            break;
    default:
            echo"<h3>Choice out of index ,choose from(1-4) !</h3>";
            break;
    }
    }
?>