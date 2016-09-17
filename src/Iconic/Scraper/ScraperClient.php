<?php

namespace Iconic\Scraper;

use Goutte\Client;

class ScraperClient
{
	public $client;
	public function __construct()
	{
		$this->client = new Client();
		$this->client->setHeader('user-agent', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_11_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/52.0.2743.116 Safari/537.36');
	}

	/**
	 * Read
	 *
	 * @param $url
	 */
	public function read($url)
	{
		return $this->client->request('GET', $url);
	}


}

