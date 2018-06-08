# Builder Pattern

- When we reviewed the Factory design patterns, we saw how they were useful for enabling polymorphism. The crucial differentiation between Factory patterns and the Builder pattern is that the Builder pattern solely has the aim of resolving one anti-pattern and does not seek to perform polymorphism. The anti-pattern in question is the Telescoping Constructor.

- The Telescoping Constructor problem is essentially where the count of arguments a constructor contains grows to an extent where it becomes impractical to use or even impractical to know which order the arguments go in.

* Note:  the Builder design pattern allows you to vary the constructor variables and also provides for good encapsulation of the code that constructs an object itself. Like all design patterns, it's down to you to decide where it's most appropriate to use each one in your code. 