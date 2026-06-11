<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WAP to find print numbers from 1 to 10.</title>
</head>
<body>
    <form action="" method="post">
    <label for="print">Print numbers from 1 to 10 :</label>

    <input type="submit" name="print" value="Print_Nums">
    </form>
</body>
</html>
<?php
    if(isset($_POST['print'])){
        for ($i = 1; $i <= 10; $i++) {
            echo "<h3>$i</h3>";
        }
    }
?>