<!-- Create an interface Shape with has methods get_data() and display_area(). Create two
classes Rectangle and Square which implements this interface. Define the instance
variables of these classes as per requirement in class itself. Create some instance of
Rectangle and Square classes and demonstrate interface implementation by classes. -->
<?php
    interface Shape {
        public function get_data($length,$breadth);
        public function display_area();
    }

    class Rectangle implements Shape{
        private $length,$breadth;

        public function get_data($length,$breadth){
            $this->length=$length;
            $this->breadth=$breadth;
        }
        public function display_area(){
            $area= $this->length * $this->breadth;
            echo "<h3>Area of Rectangle :".$area."</h3><br>";
        }

    }

    class Square implements Shape{
         private $length;

        public function get_data($length,$breadth=null){
            $this->length=$length;
        }
        public function display_area(){
            $area= $this->length * $this->length;
            echo "<h3>Area of Square :".$area."</h3><br>";
        }
    }

    $rectObj =new Rectangle();
    $rectObj->get_data(5,4);
    $rectObj->display_area();

    $sqObj =new Square();
    $sqObj->get_data(5);
    $sqObj->display_area();

?>