<?php

namespace Rslanzi\Minimal\Controllers;

use Rslanzi\Minimal\Env;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\ErrorHandler\Exception\FlattenException;

class ErrorController 
{
	public function exception(FlattenException $exception)
	{
		if (Env::get('APP_DEBUG', 'false') === true) {
			$whoops = new \Whoops\Run;
			$whoops->allowQuit(false);
			$whoops->writeToOutput(false);
			$whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
			$html = $whoops->handleException($exception);
	    	
	    	return new Response($html);
		}

		$msg = 'Something went wrong!';
	    return new Response($msg, $exception->getStatusCode());

	}
}