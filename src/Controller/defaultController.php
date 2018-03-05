<?php
namespace App\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class defaultController extends Controller
{
     /**
      * @Route("/")
      */
    public function index()
    {
        $articles ='article text';
       return $this->render(
            'base.html.twig',
            array('articles' => $articles)
        );
    }

}
