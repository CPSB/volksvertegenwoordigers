<?php

namespace ActivismeBe\Parlement;

use GuzzleHttp\Exception\RequestException;

/**
 * Debat
 *
 * @package ActivismeBe\Parlement
 */
class Debat extends Base
{
    /**
     * Geeft beschrijvende gegevens van debatten op basis van de id's van de debatten.
     * Niet bestaande id's worden genegeerd door de service. Niet bestaande id's resulteren in een HTTP Status 400.
     *
     * @see http://ws.vlpar.be/e/opendata/api/#!/debat/getLijst
     * @see todo: schrijf documentatie document.
     *
     * @param int $debatId      Query en vereiste parameter. Id's van de gevraagde debatten.
     *                          Id's zijn numeriek, gescheiden door komma's.
     *
     * @return \Psr\Http\Message\StreamInterface|string
     */
    public function debatLijst(int $debatId)
    {
        try {
            $call = $this->client->get('debat/lijst', ['query' => ['id' => $debatId]]);
            return $call->getBody();
        } catch (RequestException $e) {
            return json_encode($e);
        }
    }

    /**
     * Geeft alle data over een debat in een commissie of in de plenaire vergadering.
     * Gegevens worden door VP gebruikt om de fiche over een debat op te bouwen.
     *
     * @see http://ws.vlpar.be/e/opendata/api/#!/debat/getDebat
     * @see todo: schrijf documentatie document.
     *
     * @param  int $debatId     Query en vereiste parameter. Id's van de gevraagde debatten.
     *                          Id's zijn numeriek, gescheiden door komma's.
     *
     * @return \Psr\Http\Message\StreamInterface|string
     */
    public function debatBijId(int $debatId)
    {
        try {
            $call = $this->client->get("debat/{$debatId}");
            return $call->getBody(); // Returns nothing when no data is found with the id.
        } catch (RequestException $e) {
            return json_encode($e);
        }
    }
}
