<?php

namespace Rslanzi\Minimal\Controllers;

use eftec\bladeone\BladeOne;

class BaseController
{
    private $blade;

    public function __construct()
    {
        $this->blade = new BladeOne(
            __DIR__.'/../../../resources/views',
            __DIR__.'/../../../storage/framework/views'
        );
        $this->blade->pipeEnable = true;
    }

    public function render(string $view, array $params = [])
    {
        return $this->blade->run($view, (array) $params);
    }
}
