<?php

namespace Src\AbstractFactory\ReportFactory\PdfReporter;

use Src\AbstractFactory\ReportFactory\ReportBody;

class PdfBodyReport implements ReportBody
{

    public function generate()
    {
        echo "pdf body";
    }
}
