<?php

namespace App\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;


class RouteServiceProvider extends ServiceProvider
{
    // /**
    //  * The path to your application's "home" route.
    //  *
    //  * Typically, users are redirected here after authentication.
    //  *
    //  * @var string
    //  */
    // public const HOME = '/dashboard';

    // /**
    //  * Define your route model bindings, pattern filters, and other route configuration.
    //  *
    //  * @return void
    //  */
    // public function boot()
    // {
    //     $this->configureRateLimiting();

    //     $this->routes(function () {
    //         Route::middleware('web')
    //             ->namespace($this->namespace)
    //             ->group(base_path('routes/web.php'));

    //         Route::middleware('api')
    //             ->prefix('api')
    //             ->namespace($this->namespace . '\Api')
    //             ->group(base_path('routes/api.php'));
    //     });
    // }

    // /**
    //  * Configure the rate limiters for the application.
    //  *
    //  * @return void
    //  */
    // protected function configureRateLimiting()
    // {
    //     RateLimiter::for('api', function (\Illuminate\Http\Request $request) {
    //         return \Illuminate\Cache\RateLimiting\Limit::perMinute(60)->by(optional($request->user())->id ?: $request->ip());
    //     });
    // }
    public const HOME = '/dashboard';
}