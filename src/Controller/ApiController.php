<?php declare(strict_types=1);

namespace App\Controller;

use App\Service\Welcome;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class ApiController
{
    /**
     * @var Welcome
     */
    protected $welcome;
    /**
     * @var RequestStack
     */
    protected $requestStack;

    public function __construct(Welcome $welcome, RequestStack $requestStack)
    {
        $this->welcome = $welcome;
        $this->requestStack = $requestStack;
    }

    /**
     * get the welcome message
     *
     * @Route("/welcome", methods={"POST"})
     * @return Response
     */
    public function welcomeMessage(): Response
    {
        $request = $this->requestStack->getCurrentRequest();
        $name = $request->request->get('name');
        $welcomeSentence = $this->welcome->welcomeMessage($name);
        return new Response($welcomeSentence);
    }
}