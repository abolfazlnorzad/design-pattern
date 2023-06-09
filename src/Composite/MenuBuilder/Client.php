<?php

namespace Src\Composite\MenuBuilder;

class Client
{
    public function buildMenu()
    {
        $item1=new MenuItem("test title 1",'test url 1');
        $item2=new MenuItem("test title 2",'test url 2');
        $item3=new MenuItem("test title 3",'test url 3');
        $subMenu = new MenuCollection();
        $subMenu->add($item1);
        $subMenu->add($item2);
        $subMenu->add($item3);
        $parentMenu = new MenuCollection();
        $parentMenu->add($subMenu);
        $parentMenu->build();
    }
}
