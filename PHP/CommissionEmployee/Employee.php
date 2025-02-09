<?php
abstract class Employee {
    protected $name;
    protected $employeeId;

    public function __construct($name, $employeeId) {
        $this->name = $name;
        $this->employeeId = $employeeId;
    }

    public function getName() {
        return $this->name;
    }

    public function getEmployeeId() {
        return $this->employeeId;
    }

    abstract public function calculatePay();
}

class FullTimeEmployee extends Employee {
    private $salary;

    public function __construct($name, $employeeId, $salary) {
        parent::__construct($name, $employeeId);
        $this->salary = $salary;
    }

    public function calculatePay() {
        return "FullTimeEmployee Pay: {$this->salary}";
    }

    public function getSalary() {
        return $this->salary;
    }
}

// Implementation
$employee = new FullTimeEmployee("Solomon Dzah", "22012447", 600);
echo "Name: " . $employee->getName() . "\n";
echo "Employee ID: " . $employee->getEmployeeId() . "\n";
echo "Salary: " . $employee->getSalary() . "\n";

echo $employee->calculatePay() . "\n";
?>
