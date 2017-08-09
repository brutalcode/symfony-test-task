<?php
namespace AppBundle\Service;

use AppBundle\Entity\Elevator;

class ElevatorDispatcher
{
    protected $numberOfLifts;
    protected $maxFloorLift1;
    protected $maxFloorLift2;
    protected $floorHeight;
    protected $lifts = [];
    /**
     * @var $floorFrom - floor for our task
     */
    private $floorFrom;
    /**
     * @var $floorTo - floor for our task
     */
    private $floorTo;

    public function __construct($numberOfLifts, $maxFloorLift1, $maxFloorLift2, $floorHeight)
    {
        $this->numberOfLifts = $numberOfLifts;
        $this->maxFloorLift1 = $maxFloorLift1;
        $this->maxFloorLift2 = $maxFloorLift2;
        $this->floorHeight = $floorHeight;

        for ($i=0; $i<$numberOfLifts; $i++){
            $elevator = new Elevator();
            $elevator->setId($i);
            $this->lifts[] = $elevator;
        }
    }

    /**
     *  generate random params for lifts
     */
    public function setRandomParam()
    {
        foreach ($this->lifts as $key => $elevator){
            
            $state = rand(1,3);
            $this->lifts[$key]->setState($state);

            if ($state == 1) {
                $currentFloor = rand(1, 10);

                if ($key < 2) {
                    $taskFloor = rand(11, $this->maxFloorLift1);
                } else {
                    $taskFloor = rand(11, $this->maxFloorLift2);
                }

                $this->lifts[$key]->setCurrentFloor($currentFloor);
                $this->lifts[$key]->setTaskFloor($taskFloor);

            } elseif ($state == 2) {

                $taskFloor = rand(1, 10);

                if ($key < 2) {
                    $currentFloor = rand(11, $this->maxFloorLift1);
                } else {
                    $currentFloor = rand(11, $this->maxFloorLift2);
                }

                $this->lifts[$key]->setCurrentFloor($currentFloor);
                $this->lifts[$key]->setTaskFloor($taskFloor);
            } else {
                if ($key < 2) {
                    $currentFloor = rand(1, $this->maxFloorLift1);
                } else {
                    $currentFloor = rand(1, $this->maxFloorLift2);
                }
                $this->lifts[$key]->setCurrentFloor($currentFloor);
            }
        }

        return $this;
    }

    public function getBestEstimateLiftUp($from)
    {
        // estimated time for all lifts
        $estimatedArray = [];
        $minEstimatedKey = 0;

        //get estimated distance for all lifts
        foreach ($this->lifts as $key => $elevator) {
            
            //don't use elevator (id == 2,3) if  from > 15
            if ($from > $this->maxFloorLift2 && $elevator->getId() > 1) {
                continue;
            }

            // if lift state - 'up'-1, 'down'-2, or 'tranquility'
            if ($elevator->getState() == 1){
                if ($from >= $elevator->getCurrentFloor()){
                    $estimateDistance = ($from - $elevator->getCurrentFloor()) * $this->floorHeight;
                } else {
                    $estimateDistance = ($elevator->getTaskFloor() - $elevator->getCurrentFloor()) * $this->floorHeight +
                        abs($elevator->getTaskFloor() - $from) * $this->floorHeight;
                }
            }  elseif ($elevator->getState() == 2) {
                $estimateDistance = ($elevator->getCurrentFloor() - $elevator->getTaskFloor()) * $this->floorHeight +
                    abs($elevator->getTaskFloor() - $from) * $this->floorHeight;
            } else {
                $estimateDistance = abs($from - $elevator->getCurrentFloor()) * $this->floorHeight;
            }

            $estimatedArray[$elevator->getId()] = $estimateDistance;
        }

        $minEstimatedKey = array_keys($estimatedArray, max($estimatedArray))[0];

        return $minEstimatedKey;
    }

    public function getBestEstimateLiftDown($from)
    {
        // estimated time for all lifts
        $estimatedArray = [];
        $minEstimatedKey = 0;

        //get estimated distance for all lifts
        foreach ($this->lifts as $key => $elevator) {

            //don't use elevator (id == 2,3) if  from > 15
            if ($from > $this->maxFloorLift2 && $elevator->getId() > 1) {
                continue;
            }

            // if lift state - 'up'-1, 'down'-2, or 'tranquility'
            if ($elevator->getState() == 1){
                $estimateDistance = ($elevator->getTaskFloor() - $elevator->getCurrentFloor()) * $this->floorHeight +
                    abs($elevator->getTaskFloor() - $from) * $this->floorHeight;
            }  elseif ($elevator->getState() == 2) {
                if ($from <= $elevator->getCurrentFloor()){
                    $estimateDistance = ($elevator->getCurrentFloor() - $from) * $this->floorHeight;
                } else {
                    $estimateDistance = ($elevator->getCurrentFloor() - $elevator->getTaskFloor()) * $this->floorHeight +
                        abs($elevator->getTaskFloor() - $from) * $this->floorHeight;
                }
            } else {
                $estimateDistance = abs($from - $elevator->getCurrentFloor()) * $this->floorHeight;
            }
            //generate estimatedArray
            $estimatedArray[$elevator->getId()] = $estimateDistance;
        }
        //get key of elevator with min estimated distance
        $minEstimatedKey = array_keys($estimatedArray, max($estimatedArray))[0];

        return $minEstimatedKey;
    }
}