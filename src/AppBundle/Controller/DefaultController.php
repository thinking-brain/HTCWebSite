<?php
namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AppBundle\Form\ContactType;
use AppBundle\Entity\Contact;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="index")
     */
    public function index()
    {
        // build the form ...
        $contact = new Contact();          
        $form = $this->createForm(new ContactType(), $contact);
        // end build the form
        return $this->render('default/index.html.twig',array( 'form' => $form->createView(),));
    }
}