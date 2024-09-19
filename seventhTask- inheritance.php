<?php
class Person {
    public $name;
    public $age;
    
    public function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }
    
    public function getInfo() {
        return "Name: $this->name\nAge: $this->age\n";
    }
}

class Employee extends Person {
    public $salary;
    public $position;
    
    public function __construct($name, $age, $salary, $position) {
        parent::__construct($name, $age); 
        $this->salary = $salary;
        $this->position = $position;
    }

    public function displayDetails() {
        echo $this->getInfo();
        echo "Salary: $this->salary\nPosition: $this->position\n";
    }
}

$employee = new Employee("Pratik Octavius", 33, 6000, "Manager");
$employee->displayDetails();

?>