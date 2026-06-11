<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WAP to input CP and SP and check profit or loss. Also find profit or loss amount</title>
</head>
<body>
    <form action="" method="post">
        <label for="Cost price">Enter the cost price :</label>
        <input type="number" name="cp" id="cp" required><br><br>

        <label for="Selling price">Enter the selling price :</label>
        <input type="number" name="sp" id="sp" required><br><br>

        <input type="submit" value="Check_Profit_Loss"><br><br>
    </form>
</body>
</html>
<?php
    if(isset($_POST['cp']) && isset(($_POST['sp']))){
        $CP=$_POST['cp'];
        $SP=$_POST['sp'];
        $diff=null;

        if($CP>=$SP){
            $diff=$CP-$SP;
            echo"<h3>There is loss of \$$diff</h3>";
        } else if($CP<=$SP){
            $diff=$SP-$CP;
            echo"<h3>There is profit of \$$diff</h3>";
        } else{
            echo"<h3>CP and SP are equal, so there is no profit or loss.</h3>";
        }
    }
?>