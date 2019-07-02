<?php

namespace App\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class ApiControllerTest extends WebTestCase
{

    public function testWelcomeMessage()
    {
        $client = static::createClient();
        $client->request('POST', '/welcome', ['name' => 'toto']);
        $this->assertEquals(200, $client->getResponse()->getStatusCode());
    }
}