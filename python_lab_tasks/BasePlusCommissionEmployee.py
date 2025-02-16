from CommissionEmployee import CommissionEmployee

class BasePlusCommissionEmployee(CommissionEmployee):
    def __init__(self, first_name, last_name, social_security_number, gross_sales, commission_rate, base_salary):
        super().__init__(first_name, last_name, social_security_number, gross_sales, commission_rate)
        if base_salary >= 0.0:
            self.__base_salary = base_salary
        else:
            raise ValueError("Base salary must be >= 0.0")

    def get_base_salary(self):
        return self.__base_salary

    def set_base_salary(self, value):
        if value >= 0.0:
            self.__base_salary = value
        else:
            raise ValueError("Base salary must be >= 0.0")

    def earnings(self):
        return self.__base_salary + super().earnings()

    def display_employee_details(self):
        return (super().display_employee_details() +
                f"\nBase Salary: {self.__base_salary}")


# Testing the derived class
if __name__ == "__main__":
    base_emp = BasePlusCommissionEmployee("Solomon", "Dzah", "592-194-480", 6000.0, 0.2, 1000.0)
    print(base_emp.display_employee_details())
    # Updating base salary and display updated earnings
    base_emp.set_base_salary(1200.0)
    print(f"Updated Base Salary: {base_emp.get_base_salary()}")
    print(f"Updated Earnings: {base_emp.earnings()}")
