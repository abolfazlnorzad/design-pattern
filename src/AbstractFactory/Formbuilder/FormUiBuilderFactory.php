<?php

namespace Src\AbstractFactory\Formbuilder;

use Src\AbstractFactory\Formbuilder\elements\Button;
use Src\AbstractFactory\Formbuilder\elements\Input;

interface FormUiBuilderFactory
{
    public function createButton(): Button;

    public function createInput(): Input;
}
