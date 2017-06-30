<?php

namespace ActivismeBe\Parlement;

use GuzzleHttp\Exception\RequestException;

/**
 * Europees dossier.
 *
 * @package ActivismeBe\Parlement
 */
class Euro extends Base
{
    /**
     * Geeft beschrijven gegevens van europese dossiers op basis van de id's van de dossiers.
     * Niet bestaande id's worden genegeerd door de service. Niet numerieke id's resulteren in een HTTP Status 400.
     *
     * @see http://ws.vlpar.be/e/opendata/api/#!/euro/getLijst
     * @see todo: schrijf documentatie document.
     *
     * @param  int $euroId      Query en vereiste parameter. Id's van de gevraagde debatten.
     *                          Id's zijn numeriek, gescheiden door komma's.
     *
     * @return \Psr\Http\Message\StreamInterface|string
     */
    public function lijst(int $euroId)
    {
        try {
            $call = $this->client->get("euro/lijst?id={$euroId}");
            return $call->getBody();
        } catch (RequestException $e) {
            return json_encode($e);
        }
    }

    /**
     * Geeft alle data over een europees dossier.
     * Gegevens worden door VP gebruikt om de fiche over een europees dossier op te bouwen.
     *
     * @see http://ws.vlpar.be/e/opendata/api/#!/euro/getEuroDossier
     * @see todo: schrijf documentatie document.
     *
     * @param  int $dossierId   Path en vereiste parameter. ID van het europees dossier.
     *
     * @return \Psr\Http\Message\StreamInterface|string
     */
    public function zoekDossier(int $dossierId)
    {
        try {
            $call = $this->client->get("euro/{$dossierId}");
            return $call->getBody();
        } catch (RequestException $e) {
            return json_encode($e);
        }
    }
}
