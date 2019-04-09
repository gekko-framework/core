<?php declare(strict_types=1);
/*
 * (c) Leonardo Brugnara
 *
 * Full copyright and license information in LICENSE file.
 */

namespace Gekko\App;

use \Gekko\Core;
use \Gekko\Console\ConsoleContext;

class ConsoleApplication
{
    /**
     * Console execution context
     *
     * @var \Gekko\Console\ConsoleContext
     */
    private $context;

    public function __construct($argc, $argv, $path) {
        Core::init($path);

        $this->context = new ConsoleContext($argc, $argv);
    }

    public function run() : int 
    {
        return $this->context->run();
    }
}