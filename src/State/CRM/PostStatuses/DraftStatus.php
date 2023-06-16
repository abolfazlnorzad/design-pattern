<?php

namespace Src\State\CRM\PostStatuses;

use http\Exception\InvalidArgumentException;
use Src\State\CRM\PostStatus;

class DraftStatus extends PostStatus
{

    public function draft()
    {
        $this->post->transactionTo(new DraftStatus());
    }

    public function moderation()
    {
        $this->post->transactionTo(new ModerationStatus());
    }

    public function published()
    {
        throw new InvalidArgumentException('پست نمیتواند از حالت پیش نویسه به انتشار یافته تغییر پیدا کند');
    }
}
