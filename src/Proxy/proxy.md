### Proxy is a structural design pattern that lets you provide a substitute or placeholder for another object.A proxy controls access to the original object,allowing you to perform something either before or after the request gets through to the original object.



#### Applicability:
    - lazy initialization(virtual proxy).this is when you have a heavyweight service object that wastes system resources by
        being always up,even though you only need it from time to time.
    - caching request results.this is when you need to cache results of client requests and manage thr life cycle of this cache,
        es[ecially if results are quite large.
