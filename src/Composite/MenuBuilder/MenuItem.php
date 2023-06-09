<?php

namespace Src\Composite\MenuBuilder;

class MenuItem implements MenuComponent
{

    protected string $title;
    protected string $url;

    /**
     * @param string $title
     * @param string $url
     */
    public function __construct(string $title, string $url)
    {
        $this->title = $title;
        $this->url = $url;
    }


    public function build()
    {
       echo $this->title . $this->url;
    }
}
