<?php

namespace Nouchka\TraktTvBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('NouchkaTraktTvBundle:Default:index.html.twig');
    }
}
