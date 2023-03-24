<?php

namespace Src\FactoryMethod;

class LinkedInPublisherFactory extends MessagePublisher
{

    protected function createPublisher(): Publisher
    {
        return  new LinkedInPublisher();
    }
}
