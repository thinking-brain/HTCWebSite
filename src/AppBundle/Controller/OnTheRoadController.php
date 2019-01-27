<?php
namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class OnTheRoadController extends Controller
{
    /**
     * @Route("/on-the-road/", name="on-the-road")
     */
    public function index()
    {
        return $this->render('on-the-road/index.html.twig');
    }
}