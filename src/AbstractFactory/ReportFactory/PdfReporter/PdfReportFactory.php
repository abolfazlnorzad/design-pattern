<?php

namespace Src\AbstractFactory\ReportFactory\PdfReporter;

use Src\AbstractFactory\ReportFactory\ReportBody;
use Src\AbstractFactory\ReportFactory\ReportFactory;
use Src\AbstractFactory\ReportFactory\ReportFooter;
use Src\AbstractFactory\ReportFactory\ReportHeader;

class PdfReportFactory implements ReportFactory
{

    public function createReportHeader(): ReportHeader
    {
        return new PdfHeaderReport();
    }

    public function createReportBody(): ReportBody
    {
        return new PdfBodyReport();
    }

    public function createReportFooter(): ReportFooter
    {
        return new PdfFooterReport();
    }
}
