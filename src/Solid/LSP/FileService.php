<?php

namespace Src\Solid\LSP;

class FileService
{
    private $file;

    /**
     * @param $file
     */
    public function __construct(DownloadableFileInterface $file)
    {
        $this->file = $file;
    }

    public function getFile()
    {
        $this->file->download(); // return string or bool ???
    }

}
