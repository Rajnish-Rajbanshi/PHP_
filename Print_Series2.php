<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WAP to print following series: 1, 4, 9, 16, ..... upto 20 terms.</title>
</head>
<body>
    <form action="" method="post">
        <label for="print">Print series: 1, 4, 9, 16, ..... upto 20 terms.</label><br><br>
        <input type="submit" name="print" value="Print Series"><br><br>
    </form>
</body>
</html>
<?php
    if(isset($_POST['print'])){
        for($i=1; $i<=20; $i++){
            echo $i*$i . " ";
        }
    }
?>
