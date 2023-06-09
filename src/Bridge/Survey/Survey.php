<?php

namespace Src\Bridge\Survey;

abstract class Survey
{
    protected Presentation $presentation;

    /**
     * @param Presentation $presentation
     */
    public function __construct(Presentation $presentation)
    {
        $this->presentation = $presentation;
    }

    abstract public function display();
}
