<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WAP to print following series: 100, 98, 96, 94, ............. Upto 10 terms.</title>
</head>
<body>
    <form action="" method="post">
        <label for="print">Print series: 100, 98, 96, 94, ............. Upto 10 terms.</label><br><br>
        <input type="submit" name="print" value="Print Series"><br><br>
    </form>
</body>
</html>
<?php
    if(isset($_POST['print'])){
        $t=0;
        for($i=100; $i>=10; $i-=2){
            echo $i . " ";
            $t++;
            if($t==10){
                break;
            }
        }
    }
?>
