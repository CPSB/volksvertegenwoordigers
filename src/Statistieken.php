<?php

namespace ActivismeBe\Parlement;

use GuzzleHttp\Exception\RequestException;

/**
 * Class Statistieken
 *
 * @package ActivismeBe\Parlement
 */
class Statistieken extends Base
{
    /**
     * Geeft alle statistieken voor een commissie per zittingsjaar, per type en per object type.
     *
     * @param int       $id             Path en vereiste parameter. ID van de commissie.
     * @param string    $zittingsJaar   Path en vereiste parameter. Zitingsjaar, bijv. 2011-2012
     *
     * @return \Psr\Http\Message\StreamInterface|string
     */
    public function getStatistieken(int $id, string $zittingsJaar)
    {
        try {
            $call = $this->client->get("stats/{$id}/{$zittingsJaar}");
            return $call->getBody();
        } catch (RequestException $e) {
            return json_encode($e);
        }
    }
}
