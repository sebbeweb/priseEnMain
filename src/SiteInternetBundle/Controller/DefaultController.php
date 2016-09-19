<?php

namespace SiteInternetBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    /**
     * @Route("/page/{num}")
     * @Template("SiteInternetBundle::page.html.twig")
     */
    public function getPage($num)
    {
        return array ("page"=>$num);
    }
}
