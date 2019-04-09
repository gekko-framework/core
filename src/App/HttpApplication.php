<?php declare(strict_types=1);
/*
 * (c) Leonardo Brugnara
 *
 * Full copyright and license information in LICENSE file.
 */

namespace Gekko\App;

use \Gekko\Core;
use \Gekko\Http\HttpContext;
use \Gekko\Http\Routing\RoutingMap;

class HttpApplication
{
    /**
     * Console execution context
     *
     * @var \Gekko\Console\HttpContext
     */
    private $context;

    public function __construct($rootPath) {
        Core::init($rootPath);

        $this->context = new HttpContext();
    }

    public function run() : void 
    {
        $this->context->run();
    }

    public function withRoutes(RoutingMap $map) : void
    {
        $this->context->getRouter()->register($map);
    }

    public function with($middleware) : void
    {
        $this->context->addMiddleware($middleware);
    }
}