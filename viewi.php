<?php

use Viewi\PageEngine;

if (!function_exists('viewi')) {
    function viewi(): ViewiEngine
    {
        $viewi = Leaf\Config::get("viewi")["instance"] ?? null;

        if (!$viewi) {
            $viewi = new ViewiEngine();
            Leaf\Config::set("viewi", ["instance" => $viewi]);
        }

        return $viewi;
    }
}

class ViewiEngine
{
    /**@var \Leaf\App */
    protected $instance;

    /**
     * Initialize the viewi engine
     */
    public function init(\Leaf\App $instance = null)
    {
        if (!$instance) {
            $instance = app();
        }

        $this->instance = $instance;

        // registers the viewi handler so Viewi can handle the routes
        $this->instance->hook('router.after.dispatch', function () {
            Viewi\App::init([
                PageEngine::SOURCE_DIR =>  __DIR__ . '/components',
                PageEngine::SERVER_BUILD_DIR =>  __DIR__ . '/.build',
                PageEngine::PUBLIC_ROOT_DIR => __DIR__ . '/',
                PageEngine::DEV_MODE => true,
                PageEngine::RETURN_OUTPUT => true,
                PageEngine::COMBINE_JS => true
            ]);
            Viewi\App::handle();
        });

        Leaf\Config::get("app")["instance"] = $this->instance;
    }

    /**
     * Config for viewi engine
     */
    public function config()
    {
        // 
    }

    /**
     * Wrapper for viewi route
     * 
     * @param mixed $handler The handler for the route
     */
    public function route($handler)
    {
        return function () use ($handler) {
            Viewi\Routing\Route::get('/app', $handler);
        };
    }
}
