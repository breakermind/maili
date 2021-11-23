<?php

namespace Maili;

use Illuminate\Support\ServiceProvider;
use Illuminate\Contracts\Debug\ExceptionHandler;

class MailiServiceProvider extends ServiceProvider
{
	public function register() {}

	public function boot()
	{
		// Emails
		$this->loadViewsFrom(__DIR__.'/../resources/views', 'maili');

		if ($this->app->runningInConsole()) {
			$this->publishes([
				__DIR__.'/../resources/views' => resource_path('views/vendor/maili')
			], 'maili-config');
		}
	}
}