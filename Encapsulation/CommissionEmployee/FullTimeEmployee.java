package Encapsulation.CommissionEmployee;

public class FullTimeEmployee extends Employee {
    private double salary;

    public FullTimeEmployee(String name, String employeeId, double salary){
        super(name, employeeId);
        if(salary <= 0){
            throw new IllegalArgumentException("Salary must be greater than 0");
        }
        this.salary = salary;
    }

    public double getSalary() {
        return salary;
    }
    @Override
    public double calculatePay(){
        System.out.println(" FullTimeEmployee Pay: " + salary);
        return salary;
    }

    public static void main(String[] args) {
        FullTimeEmployee employee1 = new FullTimeEmployee("Solomon Zigla", "22012447", 850.00);
        System.out.println("Employee Name: " + employee1.getName());
        System.out.println("Employee ID: " + employee1.getEmployeeId());
        System.out.println("Employee Salary: " + employee1.getSalary());
        double pay = employee1.calculatePay();
        System.out.println("Employee Salary: " + pay);

    }
    
}
