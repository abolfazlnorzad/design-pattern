<?php

namespace Src\AbstractFactory\Formbuilder\providers\tailwind\elements;
class TailwindButton implements \Src\AbstractFactory\Formbuilder\elements\Button
{

    public function render()
    {
        echo "<button> tailwind btn </button>";
    }
}
