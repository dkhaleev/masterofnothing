<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class IndexController extends AbstractController
{

    /**
     * @Route("/", name="index")
     * @Template("Index/Index.html.twig")
     */
    public function Index()
    {
        return [
            'var' => 'value'
        ];
    }

}