<?php

namespace Src\FactoryMethod\Publisher;

class InstagramPublisher implements Publisher
{

    public function publish(Message $message)
    {
       echo sprintf("instagram publisher - title : %s - body : %s" , $message->title , $message->message);
    }
}
