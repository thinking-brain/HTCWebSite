<?php
namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AppBundle\Form\BookingType;
use AppBundle\Entity\Booking;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="index")
     */
    public function index()
    {
        // build the form ...
        $contact = new Booking();          
        $form = $this->createForm(new BookingType(), $contact);
        // end build the form
        return $this->render('default/index.html.twig',array( 'form' => $form->createView(),));
    }
}