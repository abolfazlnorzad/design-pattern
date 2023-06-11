<?php

namespace Src\Decorator\ReportGenerator;

class Client
{
    public function createReport()
    {
        $report = new Report();
        $hReport = new ReportWithHeader($report);
        $fReport = new ReportWithFooter($report);
        $report->generate();
        $hReport->generate();
        $fReport->generate();
    }
}
