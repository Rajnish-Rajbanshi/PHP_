<!-- Create an interface called calculate which has method int add(int x, int y) and perform
addition and subtraction of numbers passed as argument. Then define a class that
implements interface calculate. -->
<?php
    interface Calculate{
        public function add($x,$y);
    }
    class PerformCalculation implements Calculate{
        public function add($x,$y){
            return $x+$y;
        }
    }

    $obj=new PerformCalculation();
    $sum=$obj->add(5,6);
    echo "<h3>Sum :".$sum."</h3><br>";
?>   