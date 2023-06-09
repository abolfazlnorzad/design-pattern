<?php

namespace Src\Composite\MenuBuilder;

class MenuCollection implements MenuComponent
{

    private $menoCollections =[];

    public function add(MenuComponent $item)
    {
        $this->menoCollections[]=$item;
    }
    public function build()
    {
       foreach ($this->menoCollections as $collection){
           $collection->build();
       }
    }
}
