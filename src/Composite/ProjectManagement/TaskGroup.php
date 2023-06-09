<?php

namespace Src\Composite\ProjectManagement;

class TaskGroup implements TaskComponent
{
    private $tasks =[];

    public function add(TaskComponent $taskComponent)
    {
        $this->tasks[]=$taskComponent;
    }

    public function done()
    {
       foreach ($this->tasks as $task){
           $task->done();
       }
    }

    public function move()
    {
        // TODO: Implement move() method.
    }

    public function delete()
    {
        // TODO: Implement delete() method.
    }
}
