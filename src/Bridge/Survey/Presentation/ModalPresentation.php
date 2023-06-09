<?php

namespace Src\Bridge\Survey\Presentation;

use Src\Bridge\Survey\Presentation;

class ModalPresentation implements Presentation
{

    private string $text;

    /**
     * @param string $text
     */
    public function __construct(string $text)
    {
        $this->text = $text;
    }

    public function present()
    {
        echo $this->text;
    }
}
