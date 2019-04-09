<?php

namespace Gekko;

class Core
{
    /**
     * Project's path
     *
     * @var string|null
     */
    private static $projectPath;

    public static function init(string $projectPath) : void
    {
        self::$projectPath = $projectPath;

        Env::init($projectPath);
    }
}