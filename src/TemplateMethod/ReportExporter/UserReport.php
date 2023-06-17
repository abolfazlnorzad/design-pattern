<?php

namespace Src\TemplateMethod\ReportExporter;

use Illuminate\Database\Eloquent\Collection;

abstract class UserReport
{

    public function generate(Collection $users): void
    {
        $res = $this->prepare($users);
        $this->export($res);
    }

    private function prepare(Collection $users) :Collection
    {
        return $users->filter(function ($u){
           return $u->age > 20;
        });
    }

    abstract protected function export(Collection $users);
}
