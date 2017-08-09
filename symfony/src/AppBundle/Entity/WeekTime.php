<?php
namespace AppBundle\Entity;

class WeekTime
{
    protected $dueDate;
    
    public function getDueDate()
    {
        return $this->dueDate;
    }

    public function setDueDate(\DateTime $dueDate = null)
    {
        $this->dueDate = $dueDate;
    }
}