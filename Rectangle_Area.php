<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WAP to area of rectangle. [area=l*b]</title>
</head>
<body>
    <form action="Rectangle_Area.php" method="post">
        <label for="length">Enter the length of rectangle :</label>
        <input type="number" name="length" id="length" required><br><br>

        <label for="breadth">Enter the breadth of rectangle :</label>
        <input type="number" name="breadth" id="breadth" required><br><br>

        <input type="submit" value="cal_RectArea"><br><br>

    </form>
</body>
</html>
<?php
    if(isset($_POST['length']) && isset($_POST['breadth'])){
        $l=$_POST['length'];
        $b=$_POST['breadth'];
        $area=$l * $b;
        echo"<h3>Area of Rectangle is $area </h3>";
    }
?>
