<?php

namespace Gye\FrontendBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class HelloControllerTest extends WebTestCase
{
    public function testSayhi()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/sayhi');
    }

}
