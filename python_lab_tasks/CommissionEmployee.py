class CommissionEmployee:
    def __init__(self, first_name, last_name, social_security_number, gross_sales, commission_rate):
        self.__first_name = first_name
        self.__last_name = last_name
        self.__social_security_number = social_security_number
        if gross_sales >= 0.0:
            self.__gross_sales = gross_sales
        else:
            raise ValueError("Gross sales must be >= 0.0")

        if 0.0 <= commission_rate <= 1.0:
            self.__commission_rate = commission_rate
        else:
            raise ValueError("Commission rate must be between 0.0 and 1.0")

    def get_first_name(self):
        return self.__first_name

    def set_first_name(self, value):
        self.__first_name = value

    def get_last_name(self):
        return self.__last_name

    def set_last_name(self, value):
        self.__last_name = value

    def get_social_security_number(self):
        return self.__social_security_number

    def set_social_security_number(self, value):
        self.__social_security_number = value

    def get_gross_sales(self):
        return self.__gross_sales

    def set_gross_sales(self, value):
        if value >= 0.0:
            self.__gross_sales = value
        else:
            raise ValueError("Gross sales must be >= 0.0")

    def get_commission_rate(self):
        return self.__commission_rate

    def set_commission_rate(self, value):
        if 0.0 <= value <= 1.0:
            self.__commission_rate = value
        else:
            raise ValueError("Commission rate must be between 0.0 and 1.0")

    def earnings(self):
        return self.__gross_sales * self.__commission_rate

    def display_employee_details(self):
        return (f"CommissionEmployee: {self.__first_name} {self.__last_name}\n"
                f"Social Security Number: {self.__social_security_number}\n"
                f"Gross Sales: {self.__gross_sales}\n"
                f"Commission Rate: {self.__commission_rate}")

# Implementation Tasks
if __name__ == "__main__":
    employee = CommissionEmployee("Solomon", "Zigla", "22012447", 700.0, 0.1)
    employee.set_gross_sales(900.0)
    employee.set_commission_rate(0.15)

    print(employee.display_employee_details())
    print(f"Earnings: {employee.earnings()}")
