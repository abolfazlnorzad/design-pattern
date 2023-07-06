<?php

class FileDownloaderProxy implements DownloaderInterface {

    public function __construct(public DownloaderInterface $downloaderInterface) {
      
    }

    public function download(string $path): void
    {
        // do something 
        // check file is exist
        // . . .
    }
}