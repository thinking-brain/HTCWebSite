<?php
namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AppBundle\Form\BookingType;
use AppBundle\Entity\Booking;


class BeyondTheCapitalController extends Controller
{
    /**
     * @Route("/beyond-the-capital/", name="beyond-the-capital")
     */
    public function index()
    {
        // build the form ...
        $contact = new Booking();          
        $form = $this->createForm(new BookingType(), $contact);
        // end build the form
        return $this->render('beyond-the-capital/index.html.twig',array( 'form' => $form->createView(),));        
    }

    /**
     * @Route("/beyond-the-capital/trinidad", name="trinidad")
     */
    public function trinidad()
    {
        // build the form ...
        $contact = new Booking();          
        $form = $this->createForm(new BookingType(), $contact);
        // end build the form
        return $this->render('beyond-the-capital/trinidad.html.twig',array( 'form' => $form->createView(),));
    }

    /**
     * @Route("/beyond-the-capital/viñales", name="viñales")
     */
    public function viñales()
    {
        // build the form ...
        $contact = new Booking();          
        $form = $this->createForm(new BookingType(), $contact);
        // end build the form
        return $this->render('beyond-the-capital/viñales.html.twig',array( 'form' => $form->createView(),));
    }

    /**
     * @Route("/beyond-the-capital/zapata", name="zapata")
     */
    public function zapata()
    {
        // build the form ...
        $contact = new Booking();          
        $form = $this->createForm(new BookingType(), $contact);
        // end build the form
        return $this->render('beyond-the-capital/zapata.html.twig',array( 'form' => $form->createView(),));
    }

    /**
     * @Route("/beyond-the-capital/varadero", name="varadero")
     */
    public function varadero()
    {
        // build the form ...
        $contact = new Booking();          
        $form = $this->createForm(new BookingType(), $contact);
        // end build the form
        return $this->render('beyond-the-capital/varadero.html.twig',array( 'form' => $form->createView(),));
    }
}