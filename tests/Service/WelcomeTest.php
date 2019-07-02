<?php

namespace App\Tests\Service;


use App\Service\Welcome;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class WelcomeTest extends WebTestCase
{
    public function testWelcomeMessage()
    {
        $welcome = new Welcome();
        $this->assertEquals('Hello toto', $welcome->welcomeMessage('toto'));
    }
}