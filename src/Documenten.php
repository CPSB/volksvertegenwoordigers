<?php

namespace ActivismeBe\Parlement;

use GuzzleHttp\Exception\RequestException;

/**
 * Persistent Link Externe Documenten.
 *
 * @package ActivismeBe\Parlement
 */
class Documenten extends Base
{
    /**
     * Geeft de url terug naar de locatie van een extern document.
     *
     * @see http://ws.vlpar.be/e/opendata/api/#!/link/getLink
     * @see todo: schrijf documentatie document.
     *
     * @param  int $documentId      Path en vereiste paraleter. ID van het document.
     *
     * @return \Psr\Http\Message\StreamInterface|string
     */
    public function vind(int $documentId)
    {
        try {
            $call = $this->client->get("link/{$documentId}");
            return $call->getBody();
        } catch (RequestException $e) {
            return json_encode($e);
        }
    }
}
