<?php

namespace Src\Solid\LSP;

use http\Exception\InvalidArgumentException;

class FileService implements FileServiceInterface
{


    public function doSomething(FileInterface $file)
    {
        if (!$file instanceof LocalFile){
            throw new InvalidArgumentException(" just LocalFile ! ! ! ");
        }
        // do some thing . . .
    }
}
