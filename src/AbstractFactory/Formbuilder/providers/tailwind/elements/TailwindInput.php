<?php

namespace Src\AbstractFactory\Formbuilder\providers\tailwind\elements;
class TailwindInput implements \Src\AbstractFactory\Formbuilder\elements\Input
{

    public function render()
    {
        echo "<input> tailwind input </input>";
    }
}
