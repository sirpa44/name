<?php declare(strict_types=1);

namespace App\Service;

class Welcome
{
    /**
     * return a welcome message
     *
     * @param string $name
     * @return string
     */
    public function welcomeMessage(string $name): string
    {
        return 'Hello ' . $name;
    }
}