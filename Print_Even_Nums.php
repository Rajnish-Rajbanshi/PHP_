<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WAP to print first 15 even numbers.</title>
</head>
<body>
    <form action="" method="post">
        <label for="print">Print first 15 even numbers.</label><br><br>
        <input type="submit" name="print" value="Print Even Numbers"><br><br>
    </form>
</body>
</html>
<?php
    if(isset($_POST['print'])){
        for($i=1; $i<=15; $i++){
            echo"<h3>".($i*2)."</h3>";
        }
    }