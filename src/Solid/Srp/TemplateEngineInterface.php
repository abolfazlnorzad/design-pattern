<?php

namespace Src\Solid\Srp;

interface TemplateEngineInterface
{
    public function render(string $msg , array $params) :string;
}
