<?php

namespace ActivismeBe\Parlement;

use GuzzleHttp\Exception\RequestException;

/**
 * Class SchriftelijkeVraag
 *
 * @package ActivismeBe\Parlement
 */
class SchriftelijkeVraag extends Base
{
    /**
     * Geeft een lijst met beschrijvende gegevens van schriftelijke vragen op basis van de id's van de vragen.
     * Niet bestaande id's worden genegeerd door de service. Niet numerieke id's resulteren in een HTTP Status 400.
     *
     * @see http://ws.vlpar.be/e/opendata/api/#!/schv/getLijst
     * @see todo: Schrijf documentatie document
     *
     * @param  string|null $ids     Query en vereiste parameter. Id's van de gevraagde vragen. Id's zijn numeriek
     *                              en gescheiden door komma's.
     *
     * @return \Psr\Http\Message\StreamInterface|string
     */
    public function lijst(string $ids = null)
    {
        try {
            $param = str_replace(',','%2C', $ids);
            $call = $this->client->get("schv/lijst?id={$param}");

            return $call->getBody();
        } catch (RequestException $e) {
            return json_encode($e);
        }
    }

    /**
     * Geeft alle data over een schriftelijke vraag.
     * Gegevens worden door VP gebruikt om de fiche over schriftelijke vraag op te bouwen.
     *
     * @see
     * @see todo: Schrijf documentatie document.
     *
     * @param  int $idSchv   Query en vereiste parameter. ID's van de gevraagde vragen. ID's zijn numeriek,
     *                       gescheiden door komma's
     *
     * @return \Psr\Http\Message\StreamInterface|string
     */
    public function schriftelijkeVraag(int $idSchv)
    {
        try {
            $call = $this->client->get("schv/{$idSchv}");
            return $call->getBody();
        } catch (RequestException $e) {
            return json_encode($e);
        }
    }
}
