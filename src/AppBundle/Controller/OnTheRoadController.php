<?php
namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AppBundle\Form\BookingType;
use AppBundle\Entity\Booking;

class OnTheRoadController extends Controller
{
    /**
     * @Route("/on-the-road/", name="on-the-road")
     */
    public function index()
    {
        // build the form ...
        $contact = new Booking();          
        $form = $this->createForm(new BookingType(), $contact);
        // end build the form
        return $this->render('on-the-road/index.html.twig',array( 'form' => $form->createView(),));
    }
}