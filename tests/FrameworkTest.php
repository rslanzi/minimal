<?php

namespace Minimal\Tests;

use Minimal\Framework;
use PHPUnit\Framework\TestCase;
use Symfony\Component\Routing\Route;
use Symfony\Component\HttpKernel\HttpKernel;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\RequestContext;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Matcher\UrlMatcher;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\EventDispatcher\EventDispatcher;
use Symfony\Component\Routing\Matcher\UrlMatcherInterface;
use Symfony\Component\HttpKernel\Controller\ArgumentResolver;
use Symfony\Component\HttpKernel\EventListener\RouterListener;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;
use Symfony\Component\HttpKernel\Controller\ControllerResolver;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\HttpKernel\Controller\ControllerResolverInterface;

class FrameworkTest extends TestCase
{
	private function getFrameworkForException($exception)
    {
        $matcher = $this->createMock(UrlMatcherInterface::class);
        $matcher
            ->expects($this->once())
            ->method('match')
            ->will($this->throwException($exception));
        $matcher
            ->expects($this->once())
            ->method('getContext')
            ->will($this->returnValue($this->createMock(RequestContext::class)));

		$dispatcher = new EventDispatcher();
		$dispatcher->addSubscriber(new RouterListener($matcher, new RequestStack()));

		$controllerResolver = new ControllerResolver();
		$argumentResolver = new ArgumentResolver();

		return new HttpKernel($dispatcher, $controllerResolver, new RequestStack(), $argumentResolver);
    }

    public function testNotFoundHandling()
    {
        $framework = $this->getFrameworkForException(new \Exception);
        $response = $framework->handle(new Request());

        $this->assertEquals(404, $response->getStatusCode());
    }

/*

    public function testErrorHandling()
	{
	    $framework = $this->getFrameworkForException(new \RuntimeException());

	    $response = $framework->handle(new Request());

	    $this->assertEquals(500, $response->getStatusCode());
	}

	public function testControllerResponse()
	{
	    $matcher = $this->createMock(UrlMatcherInterface::class);

	    $matcher
	        ->expects($this->once())
	        ->method('match')
	        ->will($this->returnValue([
	            '_route' => 'blog',
	            '_controller' => [new BlogController(), 'index']
	        ]));

	    $matcher
	        ->expects($this->once())
	        ->method('getContext')
	        ->will($this->returnValue($this->createMock(RequestContext::class)));

		$request = Request::createFromGlobals();
		$requestStack = new RequestStack();
	    $controllerResolver = new ControllerResolver();
	    $argumentResolver = new ArgumentResolver();

		$dispatcher = new EventDispatcher();
		$dispatcher->addSubscriber(new RouterListener($matcher, $requestStack));
		$dispatcher->addSubscriber(new ResponseListener('UTF-8'));

	    $framework = new Framework($dispatcher, $matcher, $controllerResolver, $requestStack, $argumentResolver);

	    $response = $framework->handle($request);
dd($response);
	    $this->assertEquals(200, $response->getStatusCode());
	    $this->assertStringContainsString('Blog index', $response->getContent());
	}
*/
}
