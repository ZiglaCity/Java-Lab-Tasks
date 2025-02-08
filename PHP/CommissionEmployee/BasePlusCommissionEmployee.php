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

function main() {
    $commissionEmployee1 = new CommissionEmployee("Solomon", "Dzah", "059-219-4480", 10000, 0.05);
    echo "Commission-Only Employee:\n";
    $commissionEmployee1->display();
    echo "\n";

    $basePlusCommissionEmployee1 = new BasePlusCommissionEmployee("Zigla", "City", "22012447", 8000, 0.04, 3000);
    echo "Base Salary + Commission Employee:\n";
    $basePlusCommissionEmployee1->display();
    echo "\n";

    echo "Earnings for Commission-Only Employee: $" . $commissionEmployee1->earnings() . "\n";
    echo "Earnings for Base Salary + Commission Employee: $" . $basePlusCommissionEmployee1->earnings() . "\n";
    echo "\n";

    $basePlusCommissionEmployee1->setBaseSalary(3500);
    echo "Updated Base Salary + Commission Employee:\n";
    $basePlusCommissionEmployee1->display();
}

main();


?>
