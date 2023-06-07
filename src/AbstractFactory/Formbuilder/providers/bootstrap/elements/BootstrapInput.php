<?php

namespace Src\AbstractFactory\Formbuilder\providers\bootstrap\elements;
class BootstrapInput implements \Src\AbstractFactory\Formbuilder\elements\Input
{

    public function render()
    {
        echo "<input> bootstrap input </input>";
    }
}
