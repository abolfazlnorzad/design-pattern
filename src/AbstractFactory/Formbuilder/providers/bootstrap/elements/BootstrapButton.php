<?php

namespace Src\AbstractFactory\Formbuilder\providers\bootstrap\elements;
class BootstrapButton implements \Src\AbstractFactory\Formbuilder\elements\Button
{

    public function render()
    {
        echo "<button> bootstrap btn </button>";
    }
}
