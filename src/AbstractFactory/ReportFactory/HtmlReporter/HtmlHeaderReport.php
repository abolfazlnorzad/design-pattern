<?php

namespace Src\AbstractFactory\ReportFactory\HtmlReporter;

use Src\AbstractFactory\ReportFactory\ReportHeader;

class HtmlHeaderReport implements ReportHeader
{

    public function generate()
    {
        echo "html header";
    }
}
