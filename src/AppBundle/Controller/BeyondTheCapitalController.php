<?php
namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;


class BeyondTheCapitalController extends Controller
{
    /**
     * @Route("/beyond-the-capital/", name="beyond-the-capital")
     */
    public function index()
    {
        return $this->render('beyond-the-capital/index.html.twig');
    }

    /**
     * @Route("/beyond-the-capital/trinidad", name="trinidad")
     */
    public function trinidad()
    {
        return $this->render('beyond-the-capital/trinidad.html.twig');
    }

    /**
     * @Route("/beyond-the-capital/viñales", name="viñales")
     */
    public function viñales()
    {
        return $this->render('beyond-the-capital/viñales.html.twig');
    }

    /**
     * @Route("/beyond-the-capital/zapata", name="zapata")
     */
    public function zapata()
    {
        return $this->render('beyond-the-capital/zapata.html.twig');
    }

    /**
     * @Route("/beyond-the-capital/varadero", name="varadero")
     */
    public function varadero()
    {
        return $this->render('beyond-the-capital/varadero.html.twig');
    }
}