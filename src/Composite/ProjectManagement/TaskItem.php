<?php

namespace Src\Composite\ProjectManagement;

class TaskItem implements TaskComponent
{

    private $title;
    private $status;
    private $description;
    private $duedate;

    /**
     * @param $title
     * @param $status
     * @param $description
     * @param $duedate
     */
    public function __construct($title, $status, $description, $duedate)
    {
        $this->title = $title;
        $this->status = $status;
        $this->description = $description;
        $this->duedate = $duedate;
    }


    public function done()
    {
        // TODO: Implement done() method.
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
