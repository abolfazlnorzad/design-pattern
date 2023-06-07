<?php

namespace Src\AbstractFactory\Formbuilder\providers\tailwind;

use Src\AbstractFactory\Formbuilder\elements\Button;
use Src\AbstractFactory\Formbuilder\elements\Input;
use Src\AbstractFactory\Formbuilder\FormUiBuilderFactory;
use Src\AbstractFactory\Formbuilder\providers\tailwind\elements\TailwindButton;
use Src\AbstractFactory\Formbuilder\providers\tailwind\elements\TailwindInput;

class TailwindFormUiFactory implements FormUiBuilderFactory
{

    public function createButton(): TailwindButton
    {
       return  new TailwindButton();
    }

    public function createInput(): TailwindInput
    {
        return new TailwindInput();
    }
}
