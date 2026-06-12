<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WAP to print prime numbers from 1 to 100.</title>
</head>
<body>
    <form action="" method="post">
        <label>Print Prime numbers from 1 to 100 :</label><br><br>
        <input type="submit" name="print" value="Print Prime">
    </form>
    
</body>
</html>
<?php
    if(isset($_POST['print'])){

        for($i=1;$i<=100;$i++){
            $freq=0;
            for($j=1;$j<=$i;$j++){

                if($i%$j==0)
                    $freq++;
            }
            if($freq==2)
                echo"$i<br>";
        }
    }

?>