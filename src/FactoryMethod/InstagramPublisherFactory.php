<?php

namespace Src\FactoryMethod;

class InstagramPublisherFactory extends MessagePublisher
{

    protected function createPublisher(): Publisher
    {
        return  new InstagramPublisher();
    }
}
