<?php

namespace Modules\ModuleRelease1\Providers\Concerns;

use Modules\ModuleRelease1\Console\Commands\AddEnvCommand;
use Modules\ModuleRelease1\Console\Commands\InstallCommand;
use Modules\ModuleRelease1\Console\Commands\MakeComponentCommand;
use Modules\ModuleRelease1\Console\Commands\MakeControllerCommand;
use Modules\ModuleRelease1\Console\Commands\MakeExporterCommand;
use Modules\ModuleRelease1\Console\Commands\MakeFactoryCommand;
use Modules\ModuleRelease1\Console\Commands\MakeImporterCommand;
use Modules\ModuleRelease1\Console\Commands\MakeMiddlewareCommand;
use Modules\ModuleRelease1\Console\Commands\MakeModelCommand;
use Modules\ModuleRelease1\Console\Commands\MakeNotificationCommand;
use Modules\ModuleRelease1\Console\Commands\MakeRepositoryCommand;
use Modules\ModuleRelease1\Console\Commands\MakeRepositoryInterfaceCommand;
use Modules\ModuleRelease1\Console\Commands\MakeRequestCommand;
use Modules\ModuleRelease1\Console\Commands\MakeResourceCommand;
use Modules\ModuleRelease1\Console\Commands\MakeSeederCommand;
use Modules\ModuleRelease1\Console\Commands\MakeServiceCommand;
use Modules\ModuleRelease1\Console\Commands\MakeTraitCommand;
use Modules\ModuleRelease1\Console\Commands\MigrateCommand;
use Modules\ModuleRelease1\Console\Commands\RegisterProviderCommand;
use Modules\ModuleRelease1\Console\Commands\RouteListCommand;
use Modules\ModuleRelease1\Console\Commands\UpdateAutoloadCommand;

trait RegisterCommands
{
    protected function registerModuleCommands(): void
    {
        $this->commands([
            AddEnvCommand::class,
            InstallCommand::class,
            MigrateCommand::class,
            RegisterProviderCommand::class,
            UpdateAutoloadCommand::class,
            MakeControllerCommand::class,
            MakeModelCommand::class,
            MakeRequestCommand::class,
            MakeServiceCommand::class,
            MakeRepositoryCommand::class,
            MakeRepositoryInterfaceCommand::class,
            MakeSeederCommand::class,
            MakeFactoryCommand::class,
            MakeResourceCommand::class,
            MakeMiddlewareCommand::class,
            MakeNotificationCommand::class,
            RouteListCommand::class,
            MakeComponentCommand::class,
            MakeTraitCommand::class,
            MakeExporterCommand::class,
            MakeImporterCommand::class,
        ]);
    }
}
