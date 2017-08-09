<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use AppBundle\Entity\ElevatorTask;
//use AppBundle\Service\ElevatorDispatcher;

class ElevatorController extends Controller
{

    /**
     * @Route("/elevator", name="task_elevator")
     */
    public function elevatorAction(Request $request)
    {
        $elevatorTask = new ElevatorTask();

        $form = $this->createFormBuilder($elevatorTask)
            ->add('currentFloor', IntegerType::class, array('label' => 'Current floor'))
            ->add('up', SubmitType::class, array('label' => 'UP'))
            ->add('down', SubmitType::class, array('label' => 'DOWN'))
            ->getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $elevatorTask = $form->getData();

            $taskAction = $form->get('up')->isClicked()
                ? 'task_elevator_up'
                : 'task_elevator_down';

            return $this->redirectToRoute($taskAction, [
                'from' => $elevatorTask->getCurrentFloor()
            ]);
        }
        
        // replace this example code with whatever you need
        return $this->render('elevator/index.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/elevator-up/from/{from}", name="task_elevator_up")
     */
    public function elevatorUpAction(Request $request, $from)
    {
        $elevatorService = $this->get('ElevatorDispatcher');
        $bestElevatorKey = $elevatorService->setRandomParam()->getBestEstimateLiftUp($from);

        // replace this example code with whatever you need
        return $this->render('elevator/elevator-result.html.twig', [
            'base_dir' => 'up',
            'best_elevator_key' => $bestElevatorKey
        ]);
    }

    /**
     * @Route("/elevator-down/from/{from}", name="task_elevator_down")
     */
    public function elevatorDownAction(Request $request, $from)
    {
        $elevatorService = $this->get('ElevatorDispatcher');
        $bestElevatorKey = $elevatorService->setRandomParam()->getBestEstimateLiftDown($from);

        // replace this example code with whatever you need
        return $this->render('elevator/elevator-result.html.twig', [
            'base_dir' => 'up',
            'best_elevator_key' => $bestElevatorKey
        ]);
    }

}
