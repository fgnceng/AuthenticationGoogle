<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use HWI\Bundle\OAuthBundle\HWIOAuthBundle;
use Sensio\Bundle\FrameworkExtraBundle\Request;
class DefaultController extends AbstractController
{
    /**
     * @Route("/login/check-google", name="hwi_oauth_redirect")
     */
    public function index( )
    {

        return $this->render('default/index.html.twig');
    }
}
