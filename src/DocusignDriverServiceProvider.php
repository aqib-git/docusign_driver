<?php

namespace AlNutile\DocusignDriver;

use AlNutile\DocusignDriver\Commands\DocusignDriverCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class DocusignDriverServiceProvider extends PackageServiceProvider
{
    /**
     * Bootstrap any package services.
     */
    public function boot(): void
    {
        $this->publishes([
            __DIR__.'/../config/docusigndriver.php' => config_path('docusigndriver.php'),
        ]);
    }

    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('docusigndriver')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_docusigndriver_table')
            ->hasCommand(DocusignDriverCommand::class);
    }
}
