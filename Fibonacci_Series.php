<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WAP to print following Fibonacci series. 1, 1, 2, 3, 5, 8, ........ upto 15 terms.</title>
</head>
<body>
    <form action="" method="post">
        <label for="print">Print Fibonacci series. 1, 1, 2, 3, 5, 8, ........ upto 15 terms.</label><br><br>
        <input type="submit" name="print" value="Print Fibonacci Series"><br><br>
    </form>
</body>
</html>
<?php
    if(isset($_POST['print'])){
        $n1=1;
        $n2=1;
        $t=0;
        for($i=3; $i<=15; $i++){
            $n3=$n1+$n2;
            echo $n1."&nbsp;&nbsp;&nbsp; ";
            $n1=$n2;
            $n2=$n3;
            $t++;
            if($t==15){
                break;
            }
        }
    }
?>