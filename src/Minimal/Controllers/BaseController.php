<?php

namespace Minimal\Controllers;

use Jenssegers\Blade\Blade;

class BaseController {

	protected $blade;

	public function __construct()
	{
		$this->blade = new Blade(
			'/resources/views',
			'/storage/framework/views'
		);
	}

    public function render(string $view, array $params)
    {
        return $this->blade->render($view, $params);
	}

}
