<?php

namespace ActivismeBe\Parlement;

use GuzzleHttp\Exception\RequestException;

/**
 * Volksvertegenwoordigers
 *
 * @package ActivismeBe\Parlement
 */
class Volksvertegenwoordigers extends Base
{
    /**
     * Geeft de lijst met contactgegevens van alle Vlaamse volksvertegenwoordigers
     * die momenteel lid zijn van het Vlaams Parlement.
     *
     * @see http://ws.vlpar.be/e/opendata/api/#!/vv/getAdreslijstHuidigeVV
     * @see todo: schrijf documentatie document
     *
     * @return \Psr\Http\Message\StreamInterface|string
     */
    public function adreslijst()
    {
        try {
            // TODO: schrijf api trigger.
        } catch (RequestException $e) {
            return json_encode($e);
        }
    }

    /**
     * Geeft de volksvertegenwoordigers die momenteel lid zijn van het Bureau.
     *
     * @see http://ws.vlpar.be/e/opendata/api/#!/vv/getBureau
     * @see todo: schrijf documentatie document.
     *
     * @return \Psr\Http\Message\StreamInterface|string
     */
    public function bureau()
    {
        try {
            // TODO: schrijf api trigger
        } catch (RequestException $e) {
            return json_encode($e);
        }
    }

    /**
     * Geeft de lijst van alle gewezen Vlaamse volksvertegenwoordigers die
     * ooit lid zijn geweest van het Vlaams Parlement.
     *
     * @see todo: schrijf documentatie document
     * @see http://ws.vlpar.be/e/opendata/api/#!/vv/getGewezenVV
     *
     * @return \Psr\Http\Message\StreamInterface|string
     */
    public function gewezen()
    {
        try {
            // TODO: schrijf api trigger.
        } catch (RequestException $e) {
            return json_encode($e);
        }
    }

    /**
     * Geeft de lijst van alle Vlaamse volksvertegenwoordigers die momenteel lid
     * zijn van het Vlaams Parlement.
     *
     * @see todo: schrijf documentatie document
     * @see http://ws.vlpar.be/e/opendata/api/#!/vv/getAdreslijstHuidigeVV
     *
     * @return \Psr\Http\Message\StreamInterface|string
     */
    public function huidige()
    {
        try {
            // TODO: schrijf API trigger
        } catch (RequestException $e) {
            return json_encode($e);
        }
    }

    /**
     * Geeft de namen van Vlaamse volksvertegenwoordigers voor 1 of meerdere id's.
     * Niet bestaande id's worden genegeerd door de service.
     * Niet numerieke id's resulteren in een HTTP Status 400.
     *
     * @see todo: schrijf documentatie document
     * @see http://ws.vlpar.be/e/opendata/api/#!/vv/getLijst
     *
     * @return \Psr\Http\Message\StreamInterface|string
     */
    public function lijst()
    {
        try {
            // Todo: schrijf API trigger.
        } catch (RequestException $e) {
            return json_encode($e);
        }
    }

    /**
     * Geeft de lijst van alle volksvertegenwoordigers die momenteel lid zijn
     * van het Uitgebreid Bureau.
     *
     * @see todo: schrijf documentatie document.
     * @see http://ws.vlpar.be/e/opendata/api/#!/vv/getUitgebreidBureau
     *
     * @return \Psr\Http\Message\StreamInterface|string
     */
    public function bureauUitgebreid()
    {

    }

    /**
     * @return \Psr\Http\Message\StreamInterface|string
     */
    public function persoon($id)
    {

    }
}
