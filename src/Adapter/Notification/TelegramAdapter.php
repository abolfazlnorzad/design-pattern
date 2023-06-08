<?php

namespace Src\Adapter\Notification;

class TelegramAdapter implements Notifier
{
    private Telegram $telegramApi;
    private string $chatId;

    /**
     * @param Telegram $telegramApi
     * @param string $chatId
     */
    public function __construct(Telegram $telegramApi, string $chatId)
    {
        $this->telegramApi = $telegramApi;
        $this->chatId = $chatId;
    }


    public function send(string $message)
    {
        $this->telegramApi->send($this->chatId , $message);
    }
}
