<?php

namespace Geekhub\HomeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{

    public function indexAction()
    {
        $name = $this->container->get('simple_service')->show();

        return $this->render('GeekhubHomeBundle:Default:index.html.twig', array('name' => $name));
    }
}
