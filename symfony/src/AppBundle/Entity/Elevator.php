<?php
namespace AppBundle\Entity;

class Elevator
{
    protected $id;
    protected $state;
    protected $currentFloor;
    protected $taskFloor;

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getState()
    {
        return $this->state;
    }

    public function setState($state)
    {
        $this->state = $state;
    }

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