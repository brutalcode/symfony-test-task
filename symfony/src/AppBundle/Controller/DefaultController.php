<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use AppBundle\Entity\TaskTime;
use Symfony\Component\Validator\Constraints\DateTime;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }
    /**
     * @Route("/time-task", name="time-task")
     */
    public function timeTaskAction(Request $request)
    {
        // create a task and give it some dummy data for this example
        $taskTime = new TaskTime();
        $taskTime->setDueDate(new \DateTime('tomorrow'));

        $form = $this->createFormBuilder($taskTime)
            ->add('dueDate', DateType::class)
            ->add('save', SubmitType::class, array('label' => 'Get number of week'))
            ->getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // $form->getData() holds the submitted values
            // but, the original `$task` variable has also been updated
            $taskTime = $form->getData();

            $date = $taskTime->getDueDate();
            
            $day_of_month = $date->format('j');
            $day_of_first_week = 1;

            $number_days_of_month = $date->format('t');
            $first_day_of_month = date("w", strtotime($date->format('m') . "/01/" . $date->format('Y')));
            $last_day_of_month = date("w", strtotime($date->format('m') . "/" . $number_days_of_month ."/" . $date->format('Y')));
            if ($first_day_of_month == 0) $first_day_of_month = 7;
            if ($last_day_of_month == 0) $last_day_of_month = 7;

            //номер дня первой недели
            if ($first_day_of_month != 1) {
                $day_of_first_week = 9 - $first_day_of_month;
            }

            /*if ($day_of_month < $day_of_first_week) {

                $result = 1;
                echo $result;
                die();

//                $result = intval(($day_of_month - $day_of_first_week)/7) + 1 ;


            } else {

                $date = new \DateTime(date('Y-m-d', strtotime($date->format('Y-m-d') . " -6 days 23 hours 59 minutes")));

                $count_week_on_month = ((int) (($date->format('j')+date("w", strtotime($date->format('m') . "/01/" . $date->format('Y')))-2)/7)) + 1;
                $day_of_week = date("w", strtotime($date->format('m') . "/01/" . $date->format('Y')));
                $day_of_month = $date->format('j');
                $day_of_first_week = 1;

                $number_days_of_month = $date->format('t');
                $first_day_of_month = date("w", strtotime($date->format('m') . "/01/" . $date->format('Y')));
                $last_day_of_month = date("w", strtotime($date->format('m') . "/" . $number_days_of_month ."/" . $date->format('Y')));
                if ($first_day_of_month == 0) $first_day_of_month = 7;
                if ($last_day_of_month == 0) $last_day_of_month = 7;
                $day_of_first_week = 9 - $first_day_of_month;
                $result = intval(($day_of_month - $day_of_first_week)/7) + 1 ;
                echo $result;
                die();
            }*/

            $end_of_first_week = 8 - $first_day_of_month;

            $start_of_last_week = $number_days_of_month - $last_day_of_month + 1;

            if ($day_of_month <= $end_of_first_week && $end_of_first_week != 7) {
                $result = 1;
                echo $result; die();
            } elseif ($day_of_month >= $start_of_last_week && ($number_days_of_month - $start_of_last_week) != 6 ) {
                $result = 1;
                echo $result; die();
            } else {
                $result = intval(($day_of_month - $day_of_first_week)/7) + 2 ;
                echo $result; die();
            }





            // ... perform some action, such as saving the task to the database
            // for example, if Task is a Doctrine entity, save it!
            // $em = $this->getDoctrine()->getManager();
            // $em->persist($task);
            // $em->flush();

            return $this->redirectToRoute('task_time_success');
        }

        return $this->render('default/time-task.html.twig', array(
            'form' => $form->createView(),
        ));
    }
    /**
     * @Route("/task-time-success", name="task_time_success")
     */
    public function taskTimeSuccessAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }
    
    /**
     * @Route("/task-time-success", name="task_elevator_up")
     */
    public function taskElevatorUpAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }
    
    /**
     * @Route("/task-time-success", name="task_elevator_up")
     */
    public function taskElevatorDownAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }
    

    private function getNumberWeek($date){

    }
}
