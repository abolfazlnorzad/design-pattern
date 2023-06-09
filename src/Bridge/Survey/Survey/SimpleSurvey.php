<?php

namespace Src\Bridge\Survey\Survey;

use Src\Bridge\Survey\Survey;

class SimpleSurvey extends Survey
{

    public function display()
    {
        $this->presentation->present();
    }
}
