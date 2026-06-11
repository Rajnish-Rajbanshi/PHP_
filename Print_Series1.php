<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WAP to print following series: 5, 10, 15, 20, ...... 50</title>
</head>
<body>
    <form action="" method="post">
        <label for="print">Print series: 5, 10, 15, 20, ...... 50</label><br><br>
        <input type="submit" name="print" value="Print Series"><br><br>
    </form>
</body>
</html>
<?php
    if(isset($_POST['print'])){
        for($i=5; $i<=50; $i+=5){
            echo"<h3>$i</h3>";
        }
    }
?>
