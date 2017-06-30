<?php

namespace ActivismeBe\Parlement;

use GuzzleHttp\Client;

/**
 * Base class
 *
 * Deze class is nodig voor het initialiseren van de GuzzlePHP class.
 *
 * @package ActivismeBe\Parlement
 */
class Base
{
    /**
     * Guzzle client.
     *
     * @var Client|null
     */
    protected $client = null;

    /**
     * Base constructor.
     *
     * @return void
     */
    public function __construct()
    {
        $this->client = new Client([
            'base_uri' => 'http://ws.vlpar.be:80/e/opendata/'
        ]);
    }
}
