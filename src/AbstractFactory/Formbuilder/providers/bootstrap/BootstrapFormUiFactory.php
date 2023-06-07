<?php

namespace Src\AbstractFactory\Formbuilder\providers\bootstrap;

use Src\AbstractFactory\Formbuilder\elements\Button;
use Src\AbstractFactory\Formbuilder\elements\Input;
use Src\AbstractFactory\Formbuilder\FormUiBuilderFactory;
use Src\AbstractFactory\Formbuilder\providers\bootstrap\elements\BootstrapButton;
use Src\AbstractFactory\Formbuilder\providers\bootstrap\elements\BootstrapInput;

class BootstrapFormUiFactory implements FormUiBuilderFactory
{

    public function createButton(): BootstrapButton
    {
        return new BootstrapButton();
    }

    public function createInput(): BootstrapInput
    {
       return new BootstrapInput();
    }
}
