<?php

namespace Src\TemplateMethod\ReportExporter;

use App\Models\User;

class Client
{
    private UserReport $userReport;

    /**
     * @param UserReport $userReport
     */
    public function __construct(UserReport $userReport)
    {
        $this->userReport = $userReport;
    }

    public function report()
    {
        $this->userReport->generate(User::query()->where("is_staff",true)->get());
    }


}
