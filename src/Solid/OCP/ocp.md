### you should be able to extend a class's behavior without modifying it

#### two different perspective :
    1 : reducing the amount of change (robert c marting) => open source
    2 : backward compatibility (bertrand meyer) => enterprise software

#### violations of ocp :

    it contains conditions to  determine a strategy
    conditions using the same variables or constans are recurring inside the class or related classes.
    the class contains hard-coded references to other classes or class names
    inside the class,object are being created using the new operator
    the class has protected properties or methods,to allow changing its behavior by overriding state or behavior

    
