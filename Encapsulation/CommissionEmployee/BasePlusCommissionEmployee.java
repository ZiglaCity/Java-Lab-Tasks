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
        if (baseSalary < 0.0){
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
        BasePlusCommissionEmployee one = new BasePlusCommissionEmployee("solomon", "zigla", "22012447", 30, 0.4, 20);
        System.out.println(one.toString());
    }

}
