<?php
namespace Uchin\LaravelStep;
use Illuminate\Support\ServiceProvider;
use Uchin\LaravelStep\RootMiddleware;
class LaravelStepServiceProvider extends ServiceProvider
{

	/**
	 * Bootstrap the application events.
	 *
	 * @return void
	 */
	public function boot()
	{
        \URL::forceRootUrl(config('app.url'));
        $router = $this->app['router'];
        $router->pushMiddlewareToGroup('web', RootMiddleware::class);
        $this->loadRoutesFrom(__DIR__.'/routes.php');
	}
	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{

	}
}
