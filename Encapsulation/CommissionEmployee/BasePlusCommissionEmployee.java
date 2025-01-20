package Encapsulation.CommissionEmployee;

public class BasePlusCommissionEmployee extends CommissionEmployee {
    double  baseSalary;
    public BasePlusCommissionEmployee(String firstName, String lastName, String socialSecurityNumber, double grossSale, double commissionRate, double baseSalary){
        super(firstName, lastName, socialSecurityNumber, grossSale, commissionRate);
        setBaseSalary(baseSalary);
    }

    public double getBaseSalary() {
        return baseSalary;
    }


    public void setBaseSalary(double baseSalary) {
        if (baseSalary <= 0.0){
            throw new IllegalArgumentException("Base Salary should be greater than 0.0");
        }
        this.baseSalary = baseSalary;
    }

    @Override
    public double earnings(){
        return super.earnings() + baseSalary;
    }

    @Override
    public String toString(){
        return super.toString() + "\n Base Salary: " + baseSalary + "\n Earnings: " + earnings();
    }

    public static void main(String[] args) {
        BasePlusCommissionEmployee newEmployee = new BasePlusCommissionEmployee("Solomon", "Dzah", "22012447", 30, 0.4, 20);
        System.out.println(newEmployee.toString());

        // Updating the baseSalary and inherited fields (grossSales and commissionRate) 
        newEmployee.setGrossSales(40.5);
        newEmployee.setCommissionRate(0.51);

        // Displaying updated details
        System.out.println("Updated details: " + newEmployee.toString());

        // calculating and displaying total earnings
        double amount = newEmployee.earnings();
        System.out.println("Total Earnings: " + amount);

        // Testing the validation by attempting to set invalid values for baseSalary, grossSales,and commissionRate
        newEmployee.setBaseSalary(0);
        newEmployee.setGrossSales(-4.87);
        newEmployee.setCommissionRate(-0.876);
    }

}
