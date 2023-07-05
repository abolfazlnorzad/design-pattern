<?php

interface NotificationHandler{
    public function send(string $message);
}