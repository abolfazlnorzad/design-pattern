<?php

namespace Src\AbstractFactory\ReportFactory;

interface ReportFactory
{

    public function createReportHeader() :ReportHeader;
    public function createReportBody() :ReportBody;
    public function createReportFooter() :ReportFooter;

}
