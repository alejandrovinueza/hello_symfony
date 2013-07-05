<?php

namespace Gye\FrontendBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\JsonResponse;

class HelloController extends Controller
{
    /**
     * @Route("/sayhi/{text}")
     * @Template()
     */
    public function sayhiAction($text)
    {
    	$response = new JsonResponse();
		$response->setData(array(
		    'text' => $text
		));
		return $response;
    }

}
