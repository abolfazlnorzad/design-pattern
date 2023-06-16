<?php

namespace Src\State\CRM\PostStatuses;

use Src\State\CRM\PostStatus;

class ModerationStatus extends PostStatus
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
        $this->post->transactionTo(new PublishedStatus());
    }
}
