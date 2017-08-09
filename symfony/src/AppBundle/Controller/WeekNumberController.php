<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use AppBundle\Entity\WeekTime;
use Symfony\Component\Validator\Constraints\DateTime;

class WeekNumberController extends Controller
{
    /**
     * @Route("/week-number", name="week_number")
     */
    public function weekNumberAction(Request $request)
    {
        // create a task and give it some dummy data for this example
        $weekTime = new WeekTime();
        $weekTime->setDueDate(new \DateTime('tomorrow'));

        $form = $this->createFormBuilder($weekTime)
            ->add('dueDate', DateType::class)
            ->add('save', SubmitType::class, array('label' => 'Get number of week'))
            ->getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $weekTimeData = $form->getData();
            $date = $weekTimeData->getDueDate();

            $weekNumberService = $this->get('WeekNumber');
            $numberOfWeek = $weekNumberService->getNumberOfWeek($date);

            return $this->render('default/week-number-result.html.twig', [
                'number_of_week' => $numberOfWeek
            ]);
        }

        return $this->render('default/week-number.html.twig', array(
            'form' => $form->createView(),
        ));
    }
}
