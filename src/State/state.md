### State is A behavioral design pattern that let an object alter is behavior when its internal state changes.it appears as if the object changed its class.

#### Applicability: 
    - use the pattern when you have an object that behaves diffrently depending on its current state
        the nunber of states is enormous and the state-specific code changes frequently
    - use the pattern when you have a class polluted with massive conditionals that alter how the class 
        behaves according to the current values of the class's fields
    - use the pattern when you have a lot of duplicate code across similar state and transition of
        a condition based state machine 
