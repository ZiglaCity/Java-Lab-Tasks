package Encapsulation.CommissionEmployee;

public class CommissionEmployee {
    private String firstName;
    private String lastName;
    private String socialSecurityNumber;
    private double grossSales; // must be greater than 0.0 on initialization
    private double commissionRate; // must be between 0.0 and 1.0

    public CommissionEmployee (String firstName, String lastName, String socialSecurityNumber, double grossSales, double commissionRate){
        this.firstName = firstName;
        this.lastName = lastName;
        this.socialSecurityNumber = socialSecurityNumber;
        if( grossSales < 0.0){
            throw new IllegalArgumentException("The gross sales should not be less than 0.0.");
            // System.out.println("The grossSales should be greater than 0.0");
            // System.exit(0);
        }
        this.grossSales = grossSales;
        if (commissionRate < 0.0 || commissionRate > 1.0){
            throw new IllegalArgumentException("The commision rate should be between 0.0 and 1.0.");
            // System.out.println("The commissionRate should be between 0.0 and 1.0");
            // System.exit(0);
        }
        this.commissionRate = commissionRate;
    }

    public String getFirstName() {
        return firstName;
    }

    public void setFirstName(String firstName) {
        this.firstName = firstName;
    }

    public String getLastName() {
        return lastName;
    }

    public void setLastName(String lastName) {
        this.lastName = lastName;
    }

    public String getSocialSecurityNumber() {
        return socialSecurityNumber;
    }

    public void setSocialSecurityNumber(String socialSecurityNumber) {
        this.socialSecurityNumber = socialSecurityNumber;
    }

    public double getGrossSales() {
        return grossSales;
    }

    public void setGrossSales(double grossSales) {
        if (grossSales < 0.0){
            throw new IllegalArgumentException("The gross sales should not be less than 0.0.");
            // System.out.println("The grossSales should be greater than 0.0");
            // System.exit(0);
        }
        this.grossSales = grossSales;
    }

    public double getCommissionRate() {
        return commissionRate;
    }

    public void setCommissionRate(double commissionRate) {
        if (commissionRate < 0.0 || commissionRate > 1.0){
            throw new IllegalArgumentException("The commision rate should be between 0.0 and 1.0.");
            // System.out.println("The commissionRate should be between 0.0 and 1.0");
            // System.exit(0);
        }
        this.commissionRate = commissionRate;
    }

    public double earnings(){
        return this.grossSales * this.commissionRate;
    }

    // to display the employee's detail we have to first override its implementation since the toString method on default returns  the Class Name, "@" and Hash Code( representation of the class)
    @Override
    public String toString(){
        return "The Details of Employee; \n Name: " + firstName + " " + lastName + "\n Social security number: "+ socialSecurityNumber + "\n GrossSales: " + grossSales + "\n CommissionRate: " + commissionRate;
    }
    public static void main(String[] args) {
        CommissionEmployee Solomon = new CommissionEmployee("Solomon", "Zigla", "22012447", 50.0, 0.5);
        System.out.println(Solomon.toString());

        // updating employee's grossSale and commissionRate
        Solomon.setCommissionRate(0.7);
        Solomon.setGrossSales(150);

        // Displaying updated details
        System.out.println(Solomon.toString());
        System.out.println("Updated commission rate: " + Solomon.getCommissionRate());
        System.out.println("Updated gross sales: " + Solomon.getGrossSales());

        // calculating employee's earing 
        double amount = Solomon.earnings();
        System.out.println(Solomon.getFirstName() + " " + Solomon.getLastName() + " makes a total earning of " + amount);

        // testing validation with invalid values
        Solomon.setCommissionRate(-0.2);
        Solomon.setGrossSales(-5);
        
    }
}