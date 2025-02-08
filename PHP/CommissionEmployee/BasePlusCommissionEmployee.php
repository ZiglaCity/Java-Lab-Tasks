<?php

require_once 'CommissionEmployee.php';

class BasePlusCommissionEmployee extends CommissionEmployee {
    private $baseSalary;

    public function __construct($firstName, $lastName, $socialSecurityNumber, $grossSales, $commissionRate, $baseSalary) {
        parent::__construct($firstName, $lastName, $socialSecurityNumber, $grossSales, $commissionRate);
        if ($baseSalary < 0) {
            throw new InvalidArgumentException("Base salary cannot be negative.");
        }
        $this->baseSalary = $baseSalary;
    }

    public function getBaseSalary() {
        return $this->baseSalary;
    }

    public function setBaseSalary($newSalary) {
        if ($newSalary < 0) {
            throw new InvalidArgumentException("Base salary cannot be negative.");
        }
        $this->baseSalary = $newSalary;
    }

    public function earnings() {
        return $this->baseSalary + parent::earnings();
    }

    public function display() {
        parent::display();
        echo "Base Salary: $" . $this->baseSalary . "\n";
        echo "Total Earnings: $" . $this->earnings() . "\n";
    }
}

?>
