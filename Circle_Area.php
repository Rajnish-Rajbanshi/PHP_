<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WAP to find area of circle. [area=pi*r*r] (use pi as constant)</title>
</head>
<body>
    <form action="Circle_Area.php" method="post">
        <label for="radius">Enter the radius of circle:</label>
        <input type="number" name="radius" id="radius" required><br><br>

        <input type="submit" value="Calc_CircleArea"><br><br>
    </form>
</body>
</html>
<?php
    if(isset($_POST['radius'])){
        $rad=$_POST['radius'];
        $Circ_Area=PI()*pow($rad,2);
        echo"<h3>Area of Circle is $Circ_Area </h3>";
    }
?>