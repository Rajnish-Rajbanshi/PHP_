<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Write a program to display output like the following:
        N   10*N  100*N 1000*N
        1   10    100   1000
        2   20    200   2000
        3   30    300   3000
    </title>
</head>
<body>
    <form action="Display_Table.php" method="post">

	<label>Enter the values of N (no. of rows)</label><br>
	<input type="number" name="rows" required><br><br>

	<input type="submit" value="Display_Table" name="Display"><br><br>

</form>
    
</body>
</html>
<?php
	if(isset($_POST['rows']) && isset($_POST['Display'])){
	
	$row=$_POST['rows'];
	
	echo "|\tN\t|10 x N\t|100 x N\t|1000 x N\t|<br>";

	for($i=1;$i<=$row;$i++){
		echo "|\t$i&nbsp\t|".($i*10)."&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp\t|".($i*100)."&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp\t|".($i*1000)."&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp \t|<br>";
	
	}

}
?>