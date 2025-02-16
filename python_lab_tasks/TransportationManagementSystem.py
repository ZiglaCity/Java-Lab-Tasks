from abc import ABC, abstractmethod
class Vehicle(ABC):
    def __init__(self, vehicle_id, model, fuel_level):
        self.vehicle_id = vehicle_id
        self.model = model
        self.fuel_level = fuel_level

    def refuel(self, liters):
        self.fuel_level + liters
    
    @abstractmethod
    def calculate_range(self):
        pass

    def display_vehicle_details(self):
        return (f"Vehicle ID: {self.vehicle_id}\n"
                f"Model: {self.model}\n"
                f"Fuel Level: {self.fuel_level} liters")

class Car(Vehicle):
    def __init__(self, vehicle_id, model, fuel_level, fuel_efficiency):
        super().__init__(vehicle_id, model, fuel_level)
        self.fuel_efficiency = fuel_efficiency

    def calculate_range(self):
        range_km = self.fuel_level * self.fuel_efficiency
        print(f"Car {self.model} can travel {range_km} km with current fuel level.")

    def display_vehicle_details(self):
        return (super().display_vehicle_details() +
                f"\nFuel Efficiency: {self.fuel_efficiency} km/l")

class TransportationManager:
    @staticmethod
    def operate_vehicle(vehicle):
        vehicle.calculate_range()

# Implementation Tasks
if __name__ == "__main__":
    car = Car("C001", "Sedan", 50, 15)
    print(car.display_vehicle_details())
    car.refuel(10) 
    manager = TransportationManager()
    manager.operate_vehicle(car)