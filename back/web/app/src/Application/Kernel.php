<?php

declare(strict_types=1);

namespace App\Application;

use Spiral\Boot\Bootloader\CoreBootloader;
use Spiral\Bootloader as Framework;
use Spiral\Bootloader\Http\HttpBootloader;
use Spiral\Bootloader\I18nBootloader;
use Spiral\Bootloader\Views\TranslatedCacheBootloader;
use Spiral\Debug\Bootloader\DumperBootloader;
use Spiral\DotEnv\Bootloader\DotenvBootloader;
use Spiral\Monolog\Bootloader\MonologBootloader;
use Spiral\Nyholm\Bootloader\NyholmBootloader;
use Spiral\Prototype\Bootloader\PrototypeBootloader;
use Spiral\RoadRunnerBridge\Bootloader as RoadRunnerBridge;
use Spiral\Scaffolder\Bootloader\ScaffolderBootloader;
use Spiral\Tokenizer\Bootloader\TokenizerListenerBootloader;
use Spiral\Validation\Bootloader\ValidationBootloader;
use Spiral\Validator\Bootloader\ValidatorBootloader;
use Spiral\Views\Bootloader\ViewsBootloader;
use Spiral\YiiErrorHandler\Bootloader\YiiErrorHandlerBootloader;

class Kernel extends \Spiral\Framework\Kernel
{
    protected const SYSTEM = [];
    protected const LOAD = [];
    protected const APP = [];

    public function defineSystemBootloaders(): array
    {
        return [
            CoreBootloader::class,
            DotenvBootloader::class,
            TokenizerListenerBootloader::class,

            DumperBootloader::class,
        ];
    }

    public function defineBootloaders(): array
    {
        return [
            // Logging and exceptions handling
            MonologBootloader::class,
            YiiErrorHandlerBootloader::class,
            Bootloader\ExceptionHandlerBootloader::class,

            // Application specific logs
            Bootloader\LoggingBootloader::class,

            // RoadRunner
            RoadRunnerBridge\LoggerBootloader::class,
            RoadRunnerBridge\HttpBootloader::class,

            // Core Services
            Framework\SnapshotsBootloader::class,

            // Security and validation
            Framework\Security\EncrypterBootloader::class,
            Framework\Security\FiltersBootloader::class,
            Framework\Security\GuardBootloader::class,

            // HTTP extensions
            HttpBootloader::class,
            Framework\Http\RouterBootloader::class,
            Framework\Http\JsonPayloadsBootloader::class,
            Framework\Http\CookiesBootloader::class,
            Framework\Http\SessionBootloader::class,
            Framework\Http\CsrfBootloader::class,
            Framework\Http\PaginationBootloader::class,

            // Views
            ViewsBootloader::class,

            // Internationalization
            I18nBootloader::class,
            TranslatedCacheBootloader::class,

            NyholmBootloader::class,

            ValidationBootloader::class,
            ValidatorBootloader::class,

            // Console commands
            Framework\CommandBootloader::class,
            RoadRunnerBridge\CommandBootloader::class,
            ScaffolderBootloader::class,
            RoadRunnerBridge\ScaffolderBootloader::class,

            // Fast code prototyping
            PrototypeBootloader::class,

            // Configure route groups, middleware for route groups
            Bootloader\RoutesBootloader::class,
        ];
    }

    public function defineAppBootloaders(): array
    {
        return [
            // Application domain
            Bootloader\AppBootloader::class,
        ];
    }
}
