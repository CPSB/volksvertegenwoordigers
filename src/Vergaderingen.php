<?php

namespace ActivismeBe\Parlement;

use GuzzleHttp\Exception\RequestException;

/**
 * Class Vergaderingen
 *
 * @package ActivismeBe\Parlement
 */
class Vergaderingen extends Base
{
    /**
     * Geeft de lijst van de vergaderingen die nu bezig zijn van de plenaire of een commissie.
     *
     * @url
     * @see todo: schrijf documentatie bestand.
     *
     * @param  string|null  $status     Query parameter. Kies de waarde plenaire (plen) of
     *                                  commissievergadering (comm) uit de keuzelijst.
     *
     * @param  int|null     $commId     Query parameter. ID van een commissie. Indien men het type
     *                                  comm gebruikt en geen waarde opgeeft, krijgt men de huidige
     *                                  vergaderingen van alle commissies.
     *
     * @return \Psr\Http\Message\StreamInterface|string
     */
    public function bezig(string $status = null, int $commId = null)
    {
        if (is_null($status)) { $status = 'plen'; }

        try {
            $uri = "verg/bezig?type={$status}";
            if (! is_null($commId)) { $uri = "{$uri}&idComm={$commId}"; }

            $call = $this->client->get($uri);
            return $call->getBody();
        } catch (RequestException $e) {
            return json_encode($e);
        }
    }

    /**
     * Geeft de lijst van de toekomstige vergaderingen van de plenaire of een commissie.
     *
     * @url
     * @see: todo: schrijf documentatie bestand.
     *
     * @param  string|null  $type       Query parameter. Kies aarde plenaire of commissievergadering
     *                                  uit de keuzelijst.
     *
     * @param  int|null     $commId     Query parameter. ID van een commissie. Indien men het type comm
     *                                  gebruikt en geen waarde opgeeft, krijgt men de komende vergaderingen
     *                                  van alle commissies.
     *
     * @return \Psr\Http\Message\StreamInterface|string
     */
    public function komende(string $type = null, int $commId = null)
    {
        $uri = "verg/komende";

        try {
            if (! is_null($type)) {
                $uri = "{$uri}?type={$type}";
            }

            if (! is_null($commId)) {
                if (! is_null($type)) {
                    $uri = "{$uri}&idComm={$commId}";
                } else {
                    $uri = "{$uri}?idComm={$type}";
                }
            }

            $call = $this->client($uri);
            return $call->getBody();
        } catch (RequestException $e) {
            return json_encode($e);
        }
    }

    /**
     * Geeft beschrijvende gegevens van vergaderingen op basis van de id's van de vergaderingen.
     * Niet bestaande id's worden genegeerd door de service. Niet numerieke id's rsulteren in een HTTP Status 400.
     *
     * @url http://ws.vlpar.be/e/opendata/api/#!/verg/getLijst
     * @see todo: schrijf deocumentatie bestand.
     *
     * @param  string|null $id      Query parameter. ID's van de gevraagde vergaderingen.
     *                              ID's zijn numeriek, gescheiden door komma's.
     *
     * @return \Psr\Http\Message\StreamInterface|string
     */
    public function lijst(string $id = null)
    {

    }

    public function zoekVolledig()
    {

    }

    public function vorige()
    {

    }

    public function vindOpId()
    {

    }

    public function vergaderingAgenda()
    {

    }

    public function zoek()
    {

    }

    /**
     * Geeft het woordelijk verslag (Handelingen) van een vergadering.
     *
     * @param   int|null $vergId        Required path parameter. ID van de vergadering.
     *
     * @param   int|null $highlight     Query parameter. ID van de persoon van wie de interventies in
     *                                  de vergadering gehighlighted moeten worden.
     *
     * @return \Psr\Http\Message\StreamInterface|string
     */
    public function vergaderingHandelingen(int $vergId = null, int $highlight = null)
    {

    }
}
