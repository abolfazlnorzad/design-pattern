<?php

namespace Src\FactoryMethod\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Src\FactoryMethod\Message;
use Src\FactoryMethod\MessagePublisher;

class MessageController extends Controller
{

    public function __construct(private MessagePublisher $messagePublisher)
    {
    }

    public function publish(Request $request)
    {
        $message = new Message("this is test title " , "this is test msg");
        return $this->messagePublisher->publish($message);
    }
}
