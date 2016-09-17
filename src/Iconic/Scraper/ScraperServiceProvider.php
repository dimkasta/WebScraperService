<?php

namespace Iconic\Scraper;

use Illuminate\Support\ServiceProvider;

class ScraperServiceProvider extends ServiceProvider
{
	/**
	 * Register the application services.
	 *
	 * @return void
	 */
	public function register()
	{
		$this->app->bind('scraper', 'Iconic\Scraper\ScraperClient');
	}
}