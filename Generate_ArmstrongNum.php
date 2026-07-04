<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>29. WAP to generate Armstrong number from 1 to 100.
</title>
</head>
<body>
    <form action="" method="post">
        <label for="numbers"><h3>Armstrong numbers :</h3></label><br>
        <input type="submit" name="generate" value="Generate Armstrong Numbers"><br>
    </form>
</body>
</html>
    <?php
        if(isset($_POST['generate'])){

            for($i=1;$i<=100;$i++){
            
            $check_val=$num=$i;
            $a=0;
            $rem=0;
            $len=strlen($num);

                while($num!=0){
                    $rem=$num%10;
                    $a=$a+pow($rem,$len);
                    $num=intval($num/10);
                }

                if($check_val==$a){
                    echo $check_val ." ";
                }
            }

        }
    ?>