#Proxy Design Pattern

- Proxy is a class that is merely an interface to something else. It may be an interface to anything; from being a network connection, a file, a large object in memory, or any other resource that is too difficult to duplicate.

- In our example here, we will simply be creating a simple proxy to forward to one of two objects depending on how the proxy is instantiated.

- Accessing a simple Proxy class allows the client to access both feeders for cats and dogs from one object, depending on whether it's been instantiated.