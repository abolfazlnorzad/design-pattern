<?php

namespace Src\State\CRM\PostStatuses;

use http\Exception\InvalidArgumentException;
use Src\State\CRM\PostStatus;

class PublishedStatus extends PostStatus
{

    public function draft()
    {
        $this->post->transactionTo(new DraftStatus());
    }

    public function moderation()
    {
        throw new InvalidArgumentException('پست نمیتواند از حالت    انتشار یافته به در حال برسی تغییر پیدا کند');

    }

    public function published()
    {
        throw new InvalidArgumentException('پست نمیتواند از حالت  انتشار یافته به انتشار یافته تغییر پیدا کند');

    }
}
