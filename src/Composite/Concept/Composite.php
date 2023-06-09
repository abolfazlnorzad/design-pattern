<?php

namespace Src\Composite\Concept;

class Composite implements Component
{

    private $component = [];

    public function addComponent(Component $component)
    {
        $this->component[] = $component;
    }

    public function operation()
    {
        foreach ($this->component as $component){
            $component->operation();
        }
    }
}
