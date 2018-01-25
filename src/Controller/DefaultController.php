<?php

namespace Pkj\Bundle\SbankenBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('PkjSbankenBundle:Default:index.html.twig');
    }
}
