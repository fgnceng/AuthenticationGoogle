<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use HWI\Bundle\OAuthBundle\HWIOAuthBundle;


class DefaultController extends AbstractController

{
    /**
     * @Route("/login/{service}", name="hwi_oauth_service_redirect")
     */
    public function index( )
    {

        return $this->render('default/index.html.twig');
    }
}
