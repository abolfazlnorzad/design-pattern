<?php

namespace Src\FactoryMethod\Publisher;

class LinkedInPublisher implements Publisher
{

    public function publish(Message $message)
    {
        echo sprintf("linkedin publisher - title : %s - body : %s" , $message->title , $message->message);
    }
}
