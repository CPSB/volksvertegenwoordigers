<?php

namespace ActivismeBe\Parlement;

use GuzzleHttp\Exception\RequestException;

/**
 * Class ParlementaireInitiatieven
 *
 * @package ActivismeBe\Parlement
 */
class ParlementaireInitiatieven extends Base
{
    /**
     * Geefty beschrijvende gegevens van parlementaire initiatieven op bases van de id's van de initiatieven.
     * Niet bestaande id's worden genegeerd door de service. Niet numerieke id's resulteren in een HTTP Status 400.
     *
     * @see http://ws.vlpar.be/e/opendata/api/#!/pi/getLijst
     * @see todo: szchrijf documentatie document.
     *
     * @param  int $id      Query en vereiste parameter. ID's van de gevraagde initiatieven. ID's zijn numeriek,
     *                      gescheiden door komma's.
     *
     * @return \Psr\Http\Message\StreamInterface|string
     */
    public function initiatievenLijst(int $id)
    {
        try {
            $call = $this->client->get("pi/lijst?id={$id}");
            return $call->getBody();
        } catch (RequestException $e) {
            return json_encode($e);
        }
    }

    public function initiatief(int $id)
    {
        try {
            $call = $this->client->get("pi/{$id}");
            return $call->getBody();
        } catch (RequestException $e) {

        }
    }
}
