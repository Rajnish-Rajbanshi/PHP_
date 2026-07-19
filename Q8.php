<!-- create a class Number with three integer instance variables x,y and z. the class will have
one constructor to initialize instance variable. The class also will contain method getMax()method that will return the larger number. Create a class NumberDemo with main method
that will create an object of Number and will print the largest number.\ -->
<?php
    class Number{
        private int $x,$y,$z;

        public function __construct($x,$y,$z){
            $this->x=$x;
            $this->y=$y;
            $this->z=$z;
        }
        public function getMax(){
            return max($this->x,$this->y,$this->z);
        }
    }
    class NumberDemo{
        private Number $obj;

        public function __construct(){
            $this->obj = new Number(2,4,5);
        }
        
        public function print(){
            echo "<h3> Largest Number :" . $this->obj->getMax() . "</h3>";
        }
    }
    $obj1=new NumberDemo();
    $obj1->print();
?>