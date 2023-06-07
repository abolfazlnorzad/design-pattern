<?php

namespace Src\AbstractFactory\ReportFactory\Controller;

use App\Http\Controllers\Controller;
use Src\AbstractFactory\ReportFactory\ReportFactory;

class ReportController extends Controller
{
    // Todo => Resolve In AppServiceProvider
    public function __construct(protected ReportFactory $reportFactory)
    {
    }

    public function createReport()
    {
        $header = $this->reportFactory->createReportHeader();
        $body = $this->reportFactory->createReportBody();
        $footer = $this->reportFactory->createReportFooter();
        // do something . . .
    }
}
