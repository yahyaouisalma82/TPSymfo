<?php


namespace App\Controller;


//use http\Env\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FirstController extends AbstractController
{
    /**
     * @Route("/first",name="first")
     */
      public function first(){
         return new Response("<h1>Hello GL2</h1>");
      }
}