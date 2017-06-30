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
     * Geeft beschrijvende gegevens van parlementaire initiatieven op bases van de id's van de initiatieven.
     * Niet bestaande id's worden genegeerd door de service. Niet numerieke id's resulteren in een HTTP Status 400.
     *
     * @see http://ws.vlpar.be/e/opendata/api/#!/pi/getLijst
     * @see todo: schrijf documentatie document.
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

    /**
     * Geeft alle data over een parlementair initiatief.
     * Gegevens worden door VP gebruikt om de fuche over een parlementair initiatief op te bouwen.
     *
     * @see http://ws.vlpar.be/e/opendata/api/#!/pi/getPI
     * @see todo: schrijf documentatie document.
     *
     * @param  int $id      Path en vereiste parameter. ID van het parlementair initiatief.
     *
     * @return \Psr\Http\Message\StreamInterface
     */
    public function initiatief(int $id)
    {
        try {
            $call = $this->client->get("pi/{$id}");
            return $call->getBody();
        } catch (RequestException $e) {

        }
    }
}
