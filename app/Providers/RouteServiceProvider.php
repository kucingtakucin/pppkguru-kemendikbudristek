<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Route;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * This namespace is applied to your controller routes.
     *
     * In addition, it is set as the URL generator's root namespace.
     *
     * @var string
     */
    protected $namespace = 'App\Http\Controllers';

    /**
     * The path to the "home" route for your application.
     *
     * @var string
     */
    public const HOME = '/admin/dashboard';

    /**
     * Define your route model bindings, pattern filters, etc.
     *
     * @return void
     */
    public function boot()
    {
        //

        parent::boot();
    }

    /**
     * Define the routes for the application.
     *
     * @return void
     */
    public function map()
    {
        $this->mapApiRoutes();

        $this->mapWebRoutes();

        $this->mapAdminRoutes();
    }

    /** Define the "web" routes for the application. */
    protected function mapWebRoutes()
    {
        Route::middleware('web')
             ->namespace($this->namespace)
             ->group(base_path('routes/web.php'));
    }

    /** Define the "api" routes for the application. */
    protected function mapApiRoutes()
    {
        Route::prefix('api')
             ->middleware('api')
             ->namespace($this->namespace)
             ->group(base_path('routes/api.php'));
    }

    
    /** Define the "api" routes for the application. */
    protected function mapAdminRoutes()
    {
        Route::prefix('/admin')
             ->middleware('web')
             ->namespace($this->namespace)
             ->group(base_path('routes/web/admin.php'));
    }

    /** Define the "web" routes for the application. */
    // protected function mapAdminRoutes()
    // {
    //     $namespace = $this->namespace.'\Admin';
        
    //     Route::group([
    //         'middleware' => ['web', 'auth', 'role:admin'],
    //         'namespace' => $namespace,
    //         'prefix' => '/admin'
    //     ], function () {
    //         require base_path('routes/web/admin.php');
    //     });
    // }
}
