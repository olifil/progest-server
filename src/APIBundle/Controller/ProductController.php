<?php

namespace APIBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use FOS\RestBundle\Controller\Annotations as Rest;

class ProductController extends Controller
{

    public function indexAction()
    {
        return $this->render('APIBundle:Default:index.html.twig');
    }
}
