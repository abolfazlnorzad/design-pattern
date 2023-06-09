<?php

namespace Src\Composite\ProjectManagement;

interface TaskComponent
{
    public function done();
    public function move();
    public function delete();

}
