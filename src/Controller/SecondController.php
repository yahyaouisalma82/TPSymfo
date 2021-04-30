<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class SecondController extends AbstractController
{
    /**
     * @Route("/second/{firstname}")
     */
    //#[Route('/second', name: 'second')]
    public function index($firstname,Request  $request): Response
    {
        $name = $request->query->get('name');
        return $this->render('second/index.html.twig', [
            'controller_name' => 'SecondController','esm' => $name, 'firstname'=>$firstname
        ]);

    }

    /**
     * @Route("/hello/{name}",name="hello")
     */
    public function hello($name){
        return $this->render('second/hello.index.html.twig',array(
            'name' =>$name
        ));
    }
    /**
     * @Route("/cv/{nom}/{prenom}/{age}/{section}",name="cv")
     */

    public function cv($nom,$prenom,$age,$section ){

        return $this->render('second/cv.index.html.twig',[
            'name' => $nom,'firstname' => $prenom,'age' => $age,'section' => $section
        ]);
    }
    /**
     * @Route("hellosalma",name="home")
     */
    public function ok (){
        return $this->forward('App\Controller\SecondController::hello',
         ['name'=>"salma"]);
    }
}
