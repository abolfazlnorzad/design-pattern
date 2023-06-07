<?php

namespace Src\AbstractFactory\ReportFactory\HtmlReporter;

use Src\AbstractFactory\ReportFactory\ReportBody;

class HtmlBodyReport implements ReportBody
{

    public function generate()
    {
        echo "html body";
    }
}
