<?php
namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AppBundle\Form\ContactType;
use AppBundle\Form\BookingType;
use AppBundle\Entity\Contact;
use AppBundle\Entity\Booking;

class MailerController extends Controller
{
    
    /**
     * @Route("/book/", name="book", )
     */
    public function book(Request $request)
    {
        // build the form ...
        $booking = new Booking();
        $form = $this->createForm(new BookingType(), $booking);      
        // end build the form
        $form->handleRequest($request);
        //$booking->setDate(\DateTime::createFromFormat('dd/MM/yyyy', $booking->getDate()));
        if ($form->isSubmitted() && $form->isValid())
         {            
            $message = (new \Swift_Message('Havana True Colors'))
            ->setFrom('tours@havanatruecolors.com')   
            ->setReplyTo($booking->getEmail())         
            ->setTo('havanatruecolors@gmail.com')
            ->setBody(
                $this->renderView(                    
                    'emails/reservacion.html.twig',
                    array(
                        'name' => $booking->getFullName(),
                        'date' => $booking->getDate(),
                        'pax' => $booking->getPax(),
                        'tour' => $booking->getTour(),
                        'other' => $booking->getAdditionalRequest(),
                        )
                ),
                'text/html'
            );
            $this->get('mailer')->send($message);            
            $em = $this->getDoctrine()->getManager();
            $em->persist($booking);            
            $em->flush();
            return $this->redirectToRoute('notice');
        }        
        // render the template
        return $this->redirectToRoute('index');
    }

    /**
    * @Route("/notice/", name="notice", )
    */
    public function bookNotify()
    {
        return $this->render('default/notice.html.twig');
    }
}