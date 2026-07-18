<!-- Make an interface named num with two methods int add(int x, int y) and int diff(int x, int
y) then make a class that implements that interface num. -->
<?php
interface Num {
    public function add($x, $y);
    public function diff($x, $y);
}

class Calculate implements Num {
    public function add($x, $y) {
        return $x + $y;
    }

    public function diff($x, $y) {
        return $x - $y;
    }
}

$obj = new Calculate();

$sum = $obj->add(5, 5);
echo "<h3>Sum :" . $sum . "</h3><br>";

$sub = $obj->diff(5, 5);
echo "<h3>Difference :" . $sub . "</h3><br>";
?>