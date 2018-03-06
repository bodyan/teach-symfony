<?php

namespace App\Controller;

use App\Entity\Posts;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PostsController extends Controller
{
    /**
     * @Route("/posts", name="posts")
     */
    public function index()
    {
        $repository = $this->getDoctrine()->getRepository(Posts::class);
        $posts = $repository->findAll();

        return $this->render('posts/index.html.twig', [
            'controller_name' => 'PostsController',
            'posts' => $posts,
        ]);


    }
}
