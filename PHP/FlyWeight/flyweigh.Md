# FlyWeight Design Pattern

- Like in real life, not all objects are easy to create, and some can take up excessive amounts of memory. The FlyWeight design pattern can help us minimize memory usage by sharing as much data as possible with similar objects.
- This design pattern has limited use in most PHP applications, but it is still worth knowing it for the odd situation where it is incredibly useful.

- Note
    - Extrinsic: State belongs to the external context of the object and is input into the object when it's used.

    - Intrinsic: State that naturally belongs to the object and therefore should be permanent, immutable (internal), or context-free.

- With this, we can now build our **ShapeFactory** , which actually implements the FlyWeight pattern. An object with the color of our choice is instantiated when it's needed, and is then stored for later use.

- Now, let's take a look at the output. You can see we've drawn 100 circles, but we have only needed to instantiate a handful of circles as we are caching objects of the same color for later use

