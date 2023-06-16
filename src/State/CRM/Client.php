<?php

namespace Src\State\CRM;

class Client
{
    public function createPost()
    {
        $p = new Post('test title');
        //  $p->publish(); // Exception
        $p->moderator(); // ok
    }
}
