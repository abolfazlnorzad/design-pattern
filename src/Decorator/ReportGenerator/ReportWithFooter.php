<?php

namespace Src\Decorator\ReportGenerator;

class ReportWithFooter extends ReportDecorator
{

    public function generate()
    {
        echo 'footer : ' . $this->reportGenerator->generate();
    }
}
