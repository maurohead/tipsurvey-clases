<?php

namespace Curso\BackendBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('CursoBackendBundle:Default:index.html.twig');
    }
}
