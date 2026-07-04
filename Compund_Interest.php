
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WAP to calculate compound interest :</title>
</head>
<body>
    <form action="" method="post">
        <label for="principle">Enter the Principle amount:</label><br>
        <input type="number" name="principle" required><br><br>

        <label for="time">Enter the Time (in years):</label><br>
        <input type="number" name="time" required><br><br>

        <label for="rate of interest">Enter the Rate of Interest:</label><br>
        <input type="number" name="rate" required><br><br>

        <input type="submit" name="Calculate" value="Calc_CI">
    </form>
    
</body>
</html>
<?php
    if( isset($_POST['principle']) && isset($_POST['time']) && isset($_POST['rate']) && isset($_POST['Calculate'])){

        $P=$_POST['principle'];
        $T=$_POST['time'];
        $R=$_POST['rate'];
        $CI=0;

        $CI=$P*((pow(1+$R/100,$T))-1);
        echo "<h3>Compound Interest Amount : \$".$CI." </h3>";
    }

?>