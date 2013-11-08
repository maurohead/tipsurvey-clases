<?php

namespace Curso\SecurityBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('CursoSecurityBundle:Default:index.html.twig', array('name' => $name));
    }
}
