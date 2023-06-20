<?php

namespace App\Providers;

use Illuminate\Support\Collection;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{

    public function register()
    {
        $this->app->singleton(AspectKernel::class, function ($app) {
            $aspectKernel = AspectKernel::getInstance();
            $aspectKernel->init([
                'debug' => config('app.debug'),
                'appDir' => app_path(),
                'cacheDir' => storage_path('framework/aop/'),
                'includePaths' => [base_path('vendor')],
                'excludePaths' => []
            ]);

            $aspectKernel->registerAspect(\App\Aspects\BeforeControllerMethodsAspect::class);

            return $aspectKernel;
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Collection::macro('toUpper', function () {
            return $this->map(function ($value) {
                return strtoupper($value);
            });
        });
    }
}
