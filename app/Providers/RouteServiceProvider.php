<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Route;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void {}

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        $this->routes(function () {
            // API rotaları: /api ön eki ve 'api' middleware grubuyla yüklenecek.
            Route::prefix('api')
                ->middleware('api')
                ->group(base_path('routes/api.php'));

            // Web rotaları: 'web' middleware grubuyla yüklenecek.
            Route::middleware('web')
                ->group(base_path('routes/web.php'));
        });
    }
}
