<?php

namespace BuscautoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('BuscautoBundle:Default:index.html.twig');
    }
}
