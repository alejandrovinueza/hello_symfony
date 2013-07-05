<?php

namespace Gye\FrontendBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

class HelloController extends Controller
{
    /**
     * @Route("/sayhi/{text}")
     * @Template()
     */
    public function sayhiAction(Request $request)
    {
    	ladybug_dump($request);
    	
    }

}
