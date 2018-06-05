# Factory Design Pattern
1. Simple Factory
2. Abstract Factory
3. Factory Method


 - Simple Factory
  - What is a factory?
    - Let's imagine you order a new car; the dealer sends your order off to the factory and the factory builds your car. Your car is sent to you in its assembled form and you don't need to care about how it was made.

Similarly, a software factory produces objects for you. The factory takes your request, assembles the object using the constructor and gives them back to you to use. One of these types of Factory pattern is known as the Simple Factory. Let me show you how it works.


 - Factory Method
	- Defines an interface for creating an object but allows subclasses to decide which to instantiate.
	- ** why would you want to do this?**
		- "software entities (classes, modules, functions, etc.) should be open for extension, but closed for modification"
		- The Factory Method allows you to group certain classes together and deal with them by means of an individual factory for a group of classes. If you want to add another group, you can just add another factory.
	- how do we do this? 
		- Well, essentially we are going to create an interface for each factory (or an abstract method for that matter); we then implement that interface into any other factories we want to build.

 - Abstract Factory
	- it is the opposite of an abstract class; it is a class you can instantiate to make an object.
	- An Abstract Factory consists of the following classes: an Abstract Factory, Concrete Factory, Abstract Product, Concrete Product, and our client.
	- 