<?php
namespace App\Controller;
use App\Entity\Satellite;
use App\Entity\Transponder;
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
        $repository = $this->getDoctrine()->getRepository(Satellite::class);
        $satellites = $repository->findAll();

        return  $tmp = $this->render('index.html.twig', [
            'controller_name' => 'defaultController',
            'satellites' => $satellites,
        ]);

    }

}
