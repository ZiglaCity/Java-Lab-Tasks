<?php

class CommissionEmployee {
    private $firstName;
    private $lastName;
    private $socialSecurityNumber;
    private $grossSales;
    private $commissionRate;
    
    public function __construct($firstName, $lastName, $socialSecurityNumber, $grossSales, $commissionRate) {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->socialSecurityNumber = $socialSecurityNumber;
        if ($grossSales < 0 ) {
            throw new InvalidArgumentException("Gross sales cannot be negative.");
        }
        if ($commissionRate < 0 || $commisionRate > 1.0) {
            throw new InvalidArgumentException("Commission rate cannot be negativen and it must be between 0 and 1.0");
        
        $this->grossSales = $grossSales;
        $this->commissionRate = $commissionRate;
    }
    
    // Getters
    public function getFirstName() {
        return $this->firstName;
    }
    
    public function getLastName() {
        return $this->lastName;
    }

    public function getSocialSecurityNumber() {
        return $this->socialSecurityNumber;
    }

    public function getGrossSales() {
        return $this->grossSales;
    }

    public function getCommissionRate() {
        return $this->commissionRate;
    }
    
    // Setters
    public function setFirstName($firstName) {
        $this->firstName = $firstName;
    }
    
    public function setLastName($lastName) {
        $this->lastName = $lastName;
    }

    public function setSocialSecurityNumber($socialSecurityNumber) {
        $this->socialSecurityNumber = $socialSecurityNumber;
    }

    public function setGrossSales($grossSales) {
        if ($grossSales < 0 ) {
            throw new InvalidArgumentException("Gross sales cannot be negative.");
        }
        $this->grossSales = $grossSales;
    }

    public function setCommissionRate($commissionRate) {
        if ($commissionRate < 0 || $commisionRate > 1.0) {
            throw new InvalidArgumentException("Commission rate should be between 0 and 1.");
        $this->commissionRate = $commissionRate;
    }
    
    public function earnings() {
        return $this->grossSales * $this->commissionRate;
    }
}

function main() {
    $employee1 = new CommissionEmployee("Solomon", "Zigla", "22012447", 40, 0.6);
    echo "Hello, " . $employee1->getFirstName() . " " . $employee1->getLastName() . "\n";
    echo "Earnings: $" . $employee1->earnings() . "\n";
    
    $employee1->setGrossSales(100);
    $employee1->setCommissionRate(0.8);
    echo "Updated grossSales to " . $employee1->getGrossSales() . "\n";
    echo "Updated CommissionRate to " . $employee1->getCommissionRate() . "\n";

    echo "New Earning after updating grossSales and CommissionRate: $" . $employee1->earnings() . "\n";
}

main();

?>
