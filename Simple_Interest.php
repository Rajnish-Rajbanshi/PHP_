<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WAP to find simple interest. [si=(p*t*r)/100]</title>
</head>
<body>
    <form action="Simple_Interest.php" method="post">

        <label for="principle">Enter the principle amount:</label>
        <input type="number" name="principle" id="principle" required><br><br>

        <label for="time">Enter the time amount:</label>
        <input type="number" name="time" id="time" required><br><br>

         <label for="rate">Enter the rate:</label>
        <input type="number" name="rate" id="rate" required><br><br>

        <input type="submit" value="cal_SI"><br><br>

    </form>
</body>
</html>
<?php
    if(isset($_POST['principle']) && isset($_POST['time']) && isset($_POST['rate'])){

    $p=$_POST['principle'];
    $t=$_POST['time'];
    $r=$_POST['rate'];
    $SI=($p*$t*$r)/100;
    
    echo" <h3>Simple Interest is \$$SI </h3>";
    }
?>