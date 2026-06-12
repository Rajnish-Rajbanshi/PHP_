<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WAP to print following pattern.
        1
        10
        101
        1010
        10101
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
            for($j=1;$j<=$i;$j++){

                if($j%2==0){
                echo"0 ";
                } else{
                echo"1 ";
                }
            }
            echo"<br>";
        }
    }

?>