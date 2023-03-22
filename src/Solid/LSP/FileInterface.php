<?php

namespace Src\Solid\LSP;

interface FileInterface
{
    public function rename();

    public function copy();

    public function move();

    public function download();
}
