<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WAP to show the use of ternary operator.</title>
</head>
<body>
    <form action="" method="post">
        
        <label for="age">Enter your age for voting elogibility :</label><br><br>
        <input type="number" name="age" required><br><br>

        <input type="submit" value="Check" name="Check"><br><br>
    </form>
</body>
</html>
<?php
    if(isset($_POST['age']) && isset($_POST['Check'])){

        $age=$_POST['age'];

        echo ($age>=18)?"<h3>Congrats, you are eligible to vote!</h3>" : "<h3>Sorry, you are not eligible to vote!</h3>";
    }
?>