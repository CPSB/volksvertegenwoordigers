<?php 

namespace ActivismeBe\Parlement; 

use GuzzleHttp\Client;

class Base 
{
    protected $client = null;

    public function __construct()
    {
        $this->client = new Client(['base_uri' => 'http://ws.vlpar.be:80/e/opendata/']);
    }
}