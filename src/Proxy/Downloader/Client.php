<?php

class Client {
    public function dl()
    {
        $fd = new FileDownloader();
        $d = new FileDownloaderProxy($fd);
        $d->download("https://google.com");
    }
}