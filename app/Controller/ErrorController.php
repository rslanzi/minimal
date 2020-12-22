<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\ErrorHandler\Exception\FlattenException;

class ErrorController 
{
	public function exception(FlattenException $exception)
	{
		if (env('APP_DEBUG', 'false') === true) {
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