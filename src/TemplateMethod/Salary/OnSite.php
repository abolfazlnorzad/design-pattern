<?php

namespace Src\TemplateMethod\Salary;

class OnSite extends Salary
{

    protected function getBaseSalary()
    {
        return 5000000;
    }
}
