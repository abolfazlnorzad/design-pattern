<?php

namespace Src\Proxy\GoogleApi;

class GoogleMapApiProxy implements GoogleMapApiInterface
{

    private GoogleMapApiInterface $googleMapApi;

    /**
     * @param GoogleMapApiInterface $googleMapApi
     */
    public function __construct(GoogleMapApiInterface $googleMapApi)
    {
        $this->googleMapApi = $googleMapApi;
    }

    public function findPlaceByLatLong(string $lat, string $long)
    {
        if (env('APP_ENV') === 'production') {
            return $this->googleMapApi->findPlaceByLatLong($lat, $long);
        }
        return null;
    }
}
