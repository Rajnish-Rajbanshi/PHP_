<!-- Create an abstract class called ‘Fmachine’ having methods getdata() and putdata(). Derive
a class ‘Airplane’ having instance variables code, name, capacity and methods getdata()
and pudata() (that overrides Fmachine’s getdata() and putdata()) to read and display the
result. Create some instances of Airplane and call the required methods. -->
<?php 
    abstract class Fmachine{
        abstract public function getdata ($code,$name,$capacity);
        abstract public function putdata();
    }
    class Airplane extends Fmachine{
        private $code,$name,$capacity;

        public function getdata($code,$name,$capacity){
            $this->code=$code;
            $this->name=$name;
            $this->capacity=$capacity;
        }

        public function putdata(){
            echo "Code :".$this->code."<br>";
            echo "Name :".$this->name."<br>";
            echo "Capacity :".$this->capacity."<br>";
        }
    }

    $Airplane1=new Airplane();
    $Airplane1->getdata("A001", "Boeing 747", 416);
    $Airplane1->putdata();

    echo "<br>";

    $Airplane2=new Airplane();
    $Airplane2->getdata("A002", "Airbus A380", 853);
    $Airplane2->putdata();
?>