<?php
namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AppBundle\Entity\Booking;
use AppBundle\Form\BookingType;

class DiscoveringHavanaController extends Controller
{
    /**
     * @Route("/discovering-havana/", name="discovering-havana")
     */
    public function index()
    {
        return $this->render('discovering-havana/index.html.twig');
    }
    /**
     * @Route("/discovering-havana/havana-true-stories", name="havana-true-stories")
     */
    public function havana_true_stories()
    {
        return $this->render('discovering-havana/havana-true-stories.html.twig');
    }
    /**
     * @Route("/discovering-havana/my-blue-havana", name="my-blue-havana")
     */
    public function my_blue_havana()
    {
        return $this->render('discovering-havana/my-blue-havana.html.twig');
    }
    /**
     * @Route("/discovering-havana/havana-all-times", name="havana-all-times")
     */
    public function havana_all_times()
    {
        // build the form ...
        $booking = new Booking();         
        $form = $this->createForm(new BookingType(), $booking);
        // end build the form        
        return $this->render('discovering-havana/havana-all-times.html.twig',array( 'form' => $form->createView(),));
    }
    /**
     * @Route("/discovering-havana/oldman-havana", name="oldman-havana")
     */
    public function oldman_havana()
    {
        return $this->render('discovering-havana/oldman-havana.html.twig');
    }
}