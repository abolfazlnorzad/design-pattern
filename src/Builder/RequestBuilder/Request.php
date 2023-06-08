<?php

namespace Src\Builder\RequestBuilder;

class Request
{
    private $method , $queryString , $uri , $data , $agent;
    public function __construct(RequestBuilder $builder)
    {
        $this->data =$builder->getData();
        $this->method = $builder->getMethod();
        $this->agent = $builder->getAgent();
        $this->uri = $builder->getUri();
        $this->queryString = $builder->getQueryString();
    }

    public function run()
    {
        // send request
        return null;
    }
}
