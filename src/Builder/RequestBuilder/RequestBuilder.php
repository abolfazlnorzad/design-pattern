<?php

namespace Src\Builder\RequestBuilder;

class RequestBuilder
{

    private Request $request;
    private $method , $queryString , $uri , $data , $agent;



    public static function forge():RequestBuilder
    {
        return new RequestBuilder();
    }

    /**
     * @return mixed
     */
    public function getMethod()
    {
        return $this->method;
    }

    /**
     * @return mixed
     */
    public function getQueryString()
    {
        return $this->queryString;
    }

    /**
     * @return mixed
     */
    public function getUri()
    {
        return $this->uri;
    }

    /**
     * @return mixed
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * @return mixed
     */
    public function getAgent()
    {
        return $this->agent;
    }



    public function withAgent($agent) :RequestBuilder
    {
        $this->agent = $agent;
        return $this;
    }

    public function withUri($uri) :RequestBuilder
    {
        $this->uri = $uri;
        return $this;
    }

    public function withData($data) :RequestBuilder
    {
        $this->data = $data;
        return $this;
    }

    public function withMethod($method) :RequestBuilder
    {
        $this->method = $method;
        return $this;
    }

    public function withQueryString($q) :RequestBuilder
    {
        $this->queryString = $q;
        return $this;
    }

    public function build():Request
    {
        return new Request($this);
    }
}
