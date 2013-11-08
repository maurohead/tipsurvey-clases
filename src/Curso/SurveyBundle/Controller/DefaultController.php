<?php

namespace Curso\SurveyBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('CursoSurveyBundle:Default:index.html.twig', array('name' => 'mauro'));
    }
}
