<?php
namespace Src\Builder\RequestBuilder;
class ApiService
{
    public function fetchData()
    {
        $request = RequestBuilder::forge()->withAgent("test")
        ->withMethod("GET")->withUri("https://google.com")->build();

        $res = $request->run();
        return $res;
    }
}
