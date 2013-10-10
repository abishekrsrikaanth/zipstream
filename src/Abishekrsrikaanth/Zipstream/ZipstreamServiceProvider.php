<?php namespace Abishekrsrikaanth\Zipstream;

use Illuminate\Support\ServiceProvider;

class ZipstreamServiceProvider extends ServiceProvider {

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = false;

	/**
	 * Bootstrap the application events.
	 *
	 * @return void
	 */
	public function boot()
	{
		$this->package('abishekrsrikaanth/zipstream');
	}

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		$this->app['zipstream'] = $this->app->share(function ($app) {
			return new ZipStream();
		});
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return array('zipstream');
	}

}