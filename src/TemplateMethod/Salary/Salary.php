<?php

namespace Src\TemplateMethod\Salary;

abstract class Salary
{
    public function calc()
    {
        return $this->extra() + $this->getBaseSalary();
    }

    private function extra()
    {

    }
    abstract protected function getBaseSalary();
}
