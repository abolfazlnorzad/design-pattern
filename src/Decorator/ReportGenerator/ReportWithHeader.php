<?php

namespace Src\Decorator\ReportGenerator;

class ReportWithHeader extends ReportDecorator
{

    public function generate()
    {
       echo 'header : '.$this->reportGenerator->generate();
    }
}
