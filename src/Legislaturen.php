<?php

namespace ActivismeBe\Parlement;

use GuzzleHttp\Exception\RequestException;

/**
 * Class Legislaturen
 *
 * @package ActivismeBe\Parlement
 */
class Legislaturen extends Base
{
    /**
     * Geeft de lijst van alle tot nu toe bekende legislaturen.
     *
     * @see http://ws.vlpar.be/e/opendata/api/#!/leg/getLijst
     * @see todo: schrijf documentatie document.
     *
     * @return \Psr\Http\Message\StreamInterface|string
     */
    public function alle()
    {
        try {
            $call = $this->client->get('leg/alle');
            return $call->getBody();
        } catch (RequestException $e) {
            return json_encode($e);
        }

    }
}
