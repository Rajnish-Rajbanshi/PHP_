<!-- Create a class named ‘Member’ having the following data members like name, age, phone,
address, salary. It also has a method named ‘setMemberDetails’ which initialized all data
members and another method ‘printMemberDetails’ which displays the member details.
Second classes ‘Employee’ and ‘Manager’ inherit the ‘Member’ class. The ‘Employee’
and ‘Manager’ classes have data members ‘specialization’ and ‘printSpecialization’ and
‘Manager’ class contains a method named ‘setDepartment’ and ‘printDepartment’. Provide
a main class and create objects of ’Employee’ and ‘Manager’, set the details and print them. -->
<?php
    class Member {
        private $name, $age, $phone, $address, $salary;

        public function setMemberDetails($name, $age, $phone, $address, $salary) {
            $this->name = $name;
            $this->age = $age;
            $this->phone = $phone;
            $this->address = $address;
            $this->salary = $salary;
        }

        public function printMemberDetails() {
            echo "Name: " . $this->name . "<br>";
            echo "Age: " . $this->age . "<br>";
            echo "Phone: " . $this->phone . "<br>";
            echo "Address: " . $this->address . "<br>";
            echo "Salary: \$" . $this->salary . "<br>";
        }
    }

    class Employee extends Member {
        public $specialization;

        public function setSpecialization($specialization) {
            $this->specialization = $specialization;
        }

        public function printSpecialization() {
            echo "Specialization: " . $this->specialization . "<br>";
        }
    }

    class Manager extends Member {
        public $department;

        public function setDepartment($department) {
            $this->department = $department;
        }

        public function printDepartment() {
            echo "Department: " . $this->department . "<br>";
        }
    }
    $empObj=new Employee();
    $empObj->setMemberDetails("suvam gaduu", 30, "1234567890", "Bhadrapur", 50000);
    $empObj->setSpecialization("Software Development");
    $empObj->printMemberDetails();
    $empObj->printSpecialization();

    echo "<br>";
    $manObj=new Manager();
    $manObj->setMemberDetails("Raj lodu", 40, "0987654321", "Birtamode", 80000);
    $manObj->setDepartment("Human Resources"); 
    $manObj->printMemberDetails();
    $manObj->printDepartment();


?>