<?php

namespace ActivismeBe\Parlement;

use GuzzleHttp\Exception\RequestException;

/**
 * Class JournaalLijn
 *
 * @package ActivismeBe\Parlement
 */
class JournaalLijn extends base
{
    /**
     * Geeft alle data zoals sprekers en teksten voor een bepaald vergaderonderdeel.
     * Gegevens worden door VP gebruikt om het detailscherm van een vergaderonderdeel (journaallijn) op te bouwen.
     *
     * @param int $id   Path en vereiste parameter. ID van het vergaderonderdeel.
     *
     * @return \Psr\Http\Message\StreamInterface|string
     */
    public function vind(int $id)
    {
        try {
            $call = $this->client->get("jln/{$id}");
            return $call->getBody();
        } catch (RequestException $e) {
            return json_encode($e);
        }
    }
}
