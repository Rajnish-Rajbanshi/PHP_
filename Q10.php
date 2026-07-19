<!-- Create a class hierarchy for a zoo. Define a base class Animal with data members for the
name and age of an animal, and a method to make a sound. Create subclasses for different
types of animals, such as Lion, Tiger, Giraffe, and Zebra, and override the makeSound()
method for each subclass to make the appropriate sound. -->
<?php
    abstract class Animal{
        protected $name,$age;

        public abstract function sound();

        public function __construct($name,$age){
            $this->name=$name;
            $this->age=$age;
        }

        public function getDetails(){
            echo "Name: ".$this->name.", Age: ".$this->age."<br>";
        }
    }
    class Lion extends Animal{
        public function sound(){
            echo "Lion roars !<br>";
        }
    }
    class Tiger extends Animal{
        public function sound(){
            echo "Tiger grow!<br>";
        }
    }
    class Giraffe extends Animal{
        public function sound(){
            echo "Giraffe bleat !<br>";
        }
    }
    class Zebra extends Animal{
        public function sound(){
            echo "Zebra bray !<br>";
        }
    }
    class Zoo{
        public function main(){
            $zoo=[  new Lion ("Simba",12),
                    new Tiger("Mogambo",14),
                    new Giraffe("Lambuu",13),
                    new Zebra("Rocky",9)
            ];
        
        foreach($zoo as $animal){
            echo $animal->getDetails();
            $animal->sound();
        }
    }
    }
    $obj=new Zoo();
    $obj->main();
?>