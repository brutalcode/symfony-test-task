<?php

namespace AppBundle\Service;

class WeekNumber
{
    public function getNumberOfWeek($date)
    {
        $dayOfMonth = $date->format('j');
        $dayOfFirstWeek = 1;
        $numberDaysOfMonth = $date->format('t');
        $firstDayOfMonth = date("w", strtotime($date->format('m') . "/01/" . $date->format('Y')));
        $lastDayOfMonth = date("w", strtotime($date->format('m') . "/" . $numberDaysOfMonth ."/" . $date->format('Y')));
        if ($firstDayOfMonth == 0) $firstDayOfMonth = 7;
        if ($lastDayOfMonth == 0) $lastDayOfMonth = 7;

        //number of first day in month
        if ($firstDayOfMonth != 1) {
            $dayOfFirstWeek = 9 - $firstDayOfMonth;
        }

        //get end and start last and first week
        $endOfFirstWeek = 8 - $firstDayOfMonth;
        $startOfLastWeek = $numberDaysOfMonth - $lastDayOfMonth + 1;

        //get number of week for some part of month
        if ($dayOfMonth <= $endOfFirstWeek && $endOfFirstWeek != 7) {
            $numberOfWeek = 1;
        } elseif ($dayOfMonth >= $startOfLastWeek && ($numberDaysOfMonth - $startOfLastWeek) != 6 ) {
            $numberOfWeek = 1;
        } else {
            $numberOfWeek = intval(($dayOfMonth - $dayOfFirstWeek)/7) + 2 ;
        }

        return $numberOfWeek;
    }
}