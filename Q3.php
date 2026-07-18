<!-- Make a class “Rectangle” with attributes length and breath. The class contains methods
computeArea and displayArea. Write a program with main method that create two object
of Rectangle class and find their areas and display are of larger rectangle. -->

<?php
    class Rectangle{
        private $length,$breadth;

        public function __construct($length, $breadth) {
            $this->length = $length;
            $this->breadth = $breadth;
        }
        public function computeArea(){
            return  $this->length*$this->breadth;
        }

        public function displayArea(){
            echo "<h3>Area of Larger Rectangle :".$this->computeArea()."</h3>";
        }
    }

    $obj1=new Rectangle(4,6);
    $area1=$obj1->computeArea();
    
    $obj2=new Rectangle(3,5);
    $area2=$obj2->computeArea();

    ($area1>=$area2)?$obj1->displayArea():$obj2->displayArea();

?>