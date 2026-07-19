<!-- Create a class box with instance variables length, breath and height. Add one method
getVolume() to compute the volume of box. Use suitable constructors. Create a subclass
boxWeight that extends Box that add one variable weight. Add two methods setWeight()
and getWeight() that sets and displays the weight of box to this class. Add sutable
constructors. Your class should use upper keyword to call superclass constructor, then
create a class BoxDemo with main() method that creates two objects of BoxWeight and
display volumes and weight of box boxes. -->
 <?php 
    class Box{
        private $length,$breadth,$height;

        public function __construct($length,$breadth,$height){
            $this->length=$length;
            $this->breadth=$breadth;
            $this->height=$height;
        }
        public function getVolume(){
            return $this->length * $this->breadth * $this->height;
        }
    }
    class BoxWeight extends Box{
        protected $weight;

        public function __construct($length,$breadth,$height,$weight){
            parent::__construct($length,$breadth,$height);
            $this->weight=$weight;
        }
        public function setWeight($weight){
            $this->weight=$weight;
        }
        public function getWeight(){
            return $this->weight;
        }
    }
    class BoxDemo{
        public function main(){
            $obj1=new BoxWeight(10, 20, 30, 200);
            echo "The volume of Box 1 is: ".$obj1->getVolume()." m3 <br>";
            echo "The weight of Box 1 is: ".$obj1->getWeight()." kg <br>";

            echo "<br>";

            $obj2=new BoxWeight(15, 20, 25, 500);
            echo "The volume of Box 2 is: ".$obj2->getVolume()." m3 <br>";
            echo "The weight of Box 2 is: ".$obj2->getWeight()." kg <br>";
        }
    }
    
    $demo = new BoxDemo();
    $demo->main();
?>