<?php

namespace Src\AbstractFactory\ReportFactory\PdfReporter;

use Src\AbstractFactory\ReportFactory\ReportHeader;

class PdfHeaderReport implements ReportHeader
{

    public function generate()
    {
        echo "pdf header";
    }
}
