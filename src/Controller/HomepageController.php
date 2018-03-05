<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomepageController extends Controller
{
    /**
     * @Route("/homepage", name="homepage_index")
     */
    public function index()
    {
        return new Response(
            'Text'
        );
    }

    /**
     * @Route("/homepage/{slug}", name="homepage_greeting")
     */
    public function greeting($slug)
    {
        return new Response(
            $slug
        );
    }
}
