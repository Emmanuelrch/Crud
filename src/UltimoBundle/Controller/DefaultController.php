<?php

namespace UltimoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('UltimoBundle:Default:index.html.twig');
    }
}
