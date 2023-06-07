<?php

namespace Src\AbstractFactory\ReportFactory\PdfReporter;

use Src\AbstractFactory\ReportFactory\ReportFooter;

class PdfFooterReport implements ReportFooter
{

    public function generate()
    {
       echo "pdf footer";
    }
}
