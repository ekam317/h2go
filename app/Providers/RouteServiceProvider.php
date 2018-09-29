<?php

namespace App\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;

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

        $this->mapApiServiceProviderRoutes();

        $this->mapWebRoutes();

        $this->mapBootstrapRoutes();

        $this->mapServiceProviderRoutes();

        $this->mapLogViewersRoutes();

        $this->mapBlogRoutes();

        $this->mapAdminRoutes();
    }

    /**
     * Define the "web" routes for the application.
     *
     * These routes all receive session state, CSRF protection, etc.
     *
     * @return void
     */
    protected function mapWebRoutes()
    {
        Route::middleware('web')
             ->namespace($this->namespace)
             ->group(base_path('routes/web.php'));
    }

    /**
     * Define the "api" routes for the application.
     *
     * These routes are typically stateless.
     *
     * @return void
     */
    protected function mapApiRoutes()
    {
        Route::prefix('api')
             ->middleware('api')
             ->namespace($this->namespace)
             ->group(base_path('routes/api.php'));
    }

    /**
     * Define the blogs routes for the application.
     *
     * @return void
     */
    protected function mapBlogRoutes()
    {
        Route::middleware('web')
             ->namespace($this->namespace)
             ->group(base_path('routes/app/blog.php'));
    }

    /**
     * Define the bootstrap template routes for the application.
     *
     * @return void
     */
    protected function mapBootstrapRoutes()
    {
        Route::middleware('web')
             ->namespace($this->namespace)
             ->group(base_path('routes/app/bootstrap.php'));
    }

    /**
     * Define the service provider routes for the application.
     *
     * @return void
     */
    protected function mapServiceProviderRoutes()
    {
        Route::middleware('web')
             ->namespace($this->namespace)
             ->group(base_path('routes/app/service.provider.php'));
    }

    /**
     * Define the log viewer routes for the application.
     *
     * @return void
     */
    protected function mapLogViewersRoutes()
    {
        Route::middleware('web')
             ->namespace($this->namespace)
             ->group(base_path('routes/app/log.viewer.php'));
    }

    /**
     * Define the log viewer routes for the application.
     *
     * @return void
     */
    protected function mapAdminRoutes()
    {
        Route::middleware('web')
             ->namespace($this->namespace)
             ->group(base_path('routes/app/admin.php'));
    }

    /**
     * Define the service provider routes for the application.
     *
     * @return void
     */
    protected function mapApiServiceProviderRoutes()
    {
        Route::prefix('api')
             ->middleware('api')
             ->namespace($this->namespace)
             ->group(base_path('routes/app/api/service.provider.php'));
    }
}
