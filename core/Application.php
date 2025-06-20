<?php

namespace app\core;

/**
 * Core Application class.
 * Initializes Request and Router.
 * Runs the app by resolving the current route.
 */
class Application {

    public static string $ROOT_DIR;
    public Router $router;
    public Request $request;

    function __construct($routePath) {
        self::$ROOT_DIR = $routePath;
        $this->request = new Request();
        $this->router = new Router($this->request);
    }

    public function run() {
        echo $this->router->resolve();
    }
}
