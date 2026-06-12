<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WAP to print following pattern.
        1
        22
        333
        4444
        55555
    </title>
</head>
<body>
    <form action="" method="post">
        <input type="submit" name="print" value="Print Pattern">
    </form>
    
</body>
</html>
<?php
    if(isset($_POST['print'])){
        for($i=1;$i<=5;$i++){
            $val=$i;
            for($j=1;$j<=$i;$j++){
                echo"$val ";
            }
            echo"<br>";
        }
    }
?>