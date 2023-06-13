### CoR is a behavioral design pattern that lets you pass requests along a chain of handlers,upon receiving a request each handler decides either to process the request or to pass it to the next handler in the chain.

#### Applicability:
    - use the patternn when your program is expected to process diffrent kinds of requests in various ways,but the exact types of requests and their seuences are unknown beforehand.
    - use the pattern when it's essential to execute serveral handlers in a particular order.
    - use the pattern when the set of handlers and their order are supposed to change at runtime.

