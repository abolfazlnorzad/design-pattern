<?php

namespace Src\FactoryMethod\Publisher;

class LinkedInPublisherFactory extends MessagePublisher
{

    protected function createPublisher(): Publisher
    {
        return  new LinkedInPublisher();
    }
}
