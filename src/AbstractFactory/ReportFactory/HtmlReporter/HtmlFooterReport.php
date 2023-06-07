<?php

namespace Src\AbstractFactory\ReportFactory\HtmlReporter;

use Src\AbstractFactory\ReportFactory\ReportFooter;

class HtmlFooterReport implements ReportFooter
{

    public function generate()
    {
        echo "html footer";
    }
}
