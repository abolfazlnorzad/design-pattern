<?php

namespace Src\State\CRM;

use Src\State\CRM\PostStatuses\DraftStatus;

class Post
{
    private string $title;
    private PostStatus $status;

    /**
     * @param string $title
     */
    public function __construct(string $title)
    {
        $this->title = $title;
        $this->status = new DraftStatus();
    }

    public function transactionTo(PostStatus $status): void
    {
        $this->status = $status;
        $this->status->setPost($this);
    }

    public function moderator()
    {
        $this->status->moderation();
    }

    public function publish()
    {
        $this->status->published();
    }


}
