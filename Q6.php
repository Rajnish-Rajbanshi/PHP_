<!-- Create a class student with instance variable roll_no and two methods to read and display
the roll_no. then, create another class Test that inherits class student, consisting of its own
instance variables to hold the marks of two subjects and also methods to read and display
the marks. Finally, create another class Result which inherits class Test. It also has its own
instance variable total to hold the total two marks scored by the student. Similarly, it has
methods to calculate and display the total. Create some instances of above classes and
demonstrate inheritance. -->
<?php
    class Student{
        private $roll_no;
        public function read($roll_no){
            $this->roll_no=$roll_no;
        }
        public function display(){
            echo "Roll no. :".$this->roll_no."<br>";
        }
    }
    class Test extends Student{
        //here the instance variables sub1 and sub2 should be protected to allow access in the Result class.
        protected $sub1,$sub2;

        public function readMarks($sub1,$sub2){
            $this->sub1=$sub1;
            $this->sub2=$sub2;
        }
        public function displayMarks(){
            echo "Marks on subject 1 :".$this->sub1."<br>";
            echo "Marks on subject 2 :".$this->sub2."<br>";
        }
    }
    class Result extends Test{
        private $total;

        public function calculate(){
            $this->total = $this->sub1 + $this->sub2;
        }
        public function displayResult(){
            $this->display();
            $this->displayMarks();
            echo "Total marks :".$this->total."<br>";
        }
    }

    $obj1=new Result();
    $obj1->read(1);
    $obj1->readMarks(55,45);
    $obj1->calculate();
    $obj1->displayResult();

    echo"<br>";

    $obj2=new Result();
    $obj2->read(2);
    $obj2->readMarks(70,90);
    $obj2->calculate();
    $obj2->displayResult();
?>