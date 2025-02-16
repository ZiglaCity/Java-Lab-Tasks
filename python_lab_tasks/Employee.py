from abc import ABC, abstractmethod

class Employee(ABC):
    def __init__(self, name, employee_id):
        self._name = name
        self._employee_id = employee_id

    def get_name(self):
        return self._name

    def get_employee_id(self):
        return self._employee_id

    @abstractmethod
    def calculate_pay(self):
        pass


class FullTimeEmployee(Employee):
    def __init__(self, name, employee_id, salary):
        super().__init__(name, employee_id)
        self._salary = salary

    def get_salary(self):
        return self._salary

    def calculate_pay(self):
        return f"FullTimeEmployee Pay: {self._salary}"


# Implementation Tasks
if __name__ == "__main__":
    full_time_employee = FullTimeEmployee("Solomon Zigla", "22012447", 50000.0)
    
    print(f"Name: {full_time_employee.get_name()}")
    print(f"Employee ID: {full_time_employee.get_employee_id()}")
    print(full_time_employee.calculate_pay())
