<?php

namespace Iconic\Scraper\Facades;

use Illuminate\Support\Facades\Facade;

class ScraperClient extends Facade
{
	protected static function getFacadeAccessor() {
		return 'scraper';
	}
}