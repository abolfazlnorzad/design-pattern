<?php


abstract class NotificationMethod {

    public function __construct(public NotificationHandler $notificationHandler)
    {
        
    }

    abstract public function send(string $message);

}