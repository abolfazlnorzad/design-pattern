<?php

namespace Src\Bridge\Survey\Survey;

use Src\Bridge\Survey\Presentation;
use Src\Bridge\Survey\Survey;

class Quiz extends Survey
{

    private string $title;

    /**
     * @param string $title
     */
    public function __construct(Presentation $presentation ,string $title)
    {
        parent::__construct($presentation);
        $this->title = $title;
    }

    public function display()
    {
       $this->presentation->present();
    }
}
