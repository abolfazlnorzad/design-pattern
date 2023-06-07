<?php

namespace Src\AbstractFactory\ReportFactory\HtmlReporter;

use Src\AbstractFactory\ReportFactory\ReportBody;
use Src\AbstractFactory\ReportFactory\ReportFactory;
use Src\AbstractFactory\ReportFactory\ReportFooter;
use Src\AbstractFactory\ReportFactory\ReportHeader;

class HtmlReportFactory implements ReportFactory
{

    public function createReportHeader(): ReportHeader
    {
        return new HtmlHeaderReport();
    }

    public function createReportBody(): ReportBody
    {
       return new HtmlBodyReport();
    }

    public function createReportFooter(): ReportFooter
    {
        return  new HtmlFooterReport();
    }
}
