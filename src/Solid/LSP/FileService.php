<?php

namespace Src\Solid\LSP;

use http\Exception\InvalidArgumentException;

class FileService implements FileServiceInterface
{
    public function doSomething(DoSomethingableFileServiceInterface $file)
    {
        // do some thing . . .
    }
}
