<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\View\Compilers\BladeCompiler;

class BladeCompilerServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->singleton('blade.compiler', function ($app) {
            return new BladeCompiler(
                $app['files'],
                $app['config']['view.compiled']
            );
        });
    }

    public function boot()
    {
        //
    }
}