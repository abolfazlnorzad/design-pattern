<?php

namespace Src\Proxy\GoogleApi;

interface GoogleMapApiInterface
{
    public function findPlaceByLatLong(string $lat , string $long);
}
