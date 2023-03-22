<?php

namespace Src\Solid\Srp;

interface TranslatorInterface
{
    public function translate(string $msg) : string;
}
