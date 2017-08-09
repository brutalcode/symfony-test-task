<?php
namespace AppBundle\Entity;

class ElevatorTask
{
    protected $taskFloor;
    protected $currentFloor;

    public function getTaskFloor()
    {
        return $this->taskFloor;
    }

    public function setTaskFloor($taskFloor)
    {
        $this->taskFloor = $taskFloor;
    }

    public function getCurrentFloor()
    {
        return $this->currentFloor;
    }

    public function setCurrentFloor($currentFloor)
    {
        $this->currentFloor = $currentFloor;
    }
}