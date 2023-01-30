<?php

namespace Backpack\BackupManager;

use Illuminate\Routing\Router;
use Illuminate\Support\ServiceProvider;

class BackupManagerServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Where the route file lives, both inside the package and in the app (if overwritten).
     *
     * @var string
     */
    public $routeFilePath = '/routes/backpack/backupmanager.php';

    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        // LOAD THE VIEWS
        // - first the published/overwritten views (in case they have any changes)
        $customViewsFolder = resource_path('views/vendor/backpack/backupmanager');

        if (file_exists($customViewsFolder)) {
            $this->loadViewsFrom($customViewsFolder, 'backupmanager');
        }
        // - then the stock views that come with the package, in case a published view might be missing
        $this->loadViewsFrom(realpath(__DIR__.'/resources/views'), 'backupmanager');

        // publish config file
        $this->publishes([__DIR__.'/config/backupmanager.php' => config_path('backpack/backupmanager.php')], 'backup-config');

        // publish lang files
        $this->publishes([__DIR__.'/resources/lang' => app()->langPath().'/vendor/backpack'], 'lang');
        // publish the views
        $this->publishes([__DIR__.'/resources/views' => resource_path('views/vendor/backpack/backupmanager')], 'views');
    }

    /**
     * Define the routes for the application.
     *
     * @param \Illuminate\Routing\Router $router
     *
     * @return void
     */
    public function setupRoutes(Router $router)
    {
        // by default, use the routes file provided in vendor
        $routeFilePathInUse = __DIR__.$this->routeFilePath;

        // but if there's a file with the same name in routes/backpack, use that one
        if (file_exists(base_path().$this->routeFilePath)) {
            $routeFilePathInUse = base_path().$this->routeFilePath;
        }

        $this->loadRoutesFrom($routeFilePathInUse);
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register()
    {
        $this->setupRoutes($this->app->router);
    }
}
