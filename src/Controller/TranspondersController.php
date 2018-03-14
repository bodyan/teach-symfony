<?php
namespace App\Controller;

use App\Entity\Transponder;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Flex\Response;

class TranspondersController extends Controller
{
    /**
     * @Route("/transponder/{id}", name="transponders_showById", requirements={"id"="\d+"})
     */
    public function showById($id)
    {
        $transponder = $this->getDoctrine()
            ->getRepository(Transponder::class)
            ->find($id);

        $satellite = $transponder->getSatellite()->getName();;
        dump($satellite);
        return new Response( )
    }
}