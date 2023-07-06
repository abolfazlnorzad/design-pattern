<?php

interface DownloaderInterface {
    public function download(string $path) :void;
}