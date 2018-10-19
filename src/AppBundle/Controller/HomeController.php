<?php
namespace AppBundle\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;


/**
 * Description of HomeController
 *
 * @author simonskov
 */
class HomeController extends Controller
{

    /**
     * @Route("/", name="Home")
     */
    public function  welcomeAction()
    {
        return $this->render('home/welcome.html.twig');
    }
}
