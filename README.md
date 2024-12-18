

## Laravel Project: Factory Method Design Pattern
## Definition of Factory Method
The **Factory Method** is a **creational design pattern** that provides an interface for creating objects in a superclass but allows subclasses to alter the type of objects that will be created. Instead of directly instantiating objects (using new), the Factory Method delegates the creation logic to subclasses, promoting flexibility and adherence to the **Open-Closed Principle**.

The Factory Method is used to **encapsulate the creation of delivery objects** **(Snapp, Tipax, Post)**, making the code extensible and easier to maintain when adding new delivery methods.


## About This Project

In this project, the Factory Method is used to handle different delivery methods: Snapp, Tipax, and Post. Each delivery type has its own logic encapsulated in a dedicated class, making the code more modular, maintainable, and extensible.
Laravel is accessible, powerful, and provides tools required for large, robust applications.

## How It Works in This Project

- **Product:**
The product represents the object that is being created. In this project, the DeliveryResponse acts as the product that contains the details of a delivery (e.g., delivery type, cost, estimated time, tracking ID).
- **Creator (Factory Interface):**
  The IDelivery interface defines the contract for creating the delivery objects. This ensures that all delivery methods (Snapp, Tipax, Post) follow a consistent structure.
- **Concrete Creators (Subclasses):**
  Each delivery method (e.g., SnappDelivery, TipaxDelivery, PostDelivery) extends the creator interface and implements its own delivery logic, producing the desired product (DeliveryResponse).
- **Client:**
  The client code uses the factory interface (IDelivery) and is unaware of the specific implementation being used. This decouples the creation logic from the client code, promoting flexibility and reusability.
