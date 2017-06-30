<?php

namespace ActivismeBe\Parlement;

use GuzzleHttp\Exception\RequestException;

/**
 * Class Hoorzitting
 *
 * @package ActivismeBe\Parlement
 */
class Hoorzitting extends Base
{
    /**
     * Geeft bechrijvende gegevens van hoorzittingen of gedachtenwisselingen op basis van de id's
     * van de hoorzitting of gedachtenwisselingen. Niet bestaande id's worden genegeerd door de service.
     * Niet numerieke id's resulteren in een HTTP Status 400.
     *
     * @param  int $id
     *
     * @return \Psr\Http\Message\StreamInterface|string
     */
    public function lijst(int $id)
    {
        try {
            $call = $this->client->get("hg/lijst?id={$id}");
            return $call->getBody();
        } catch (RequestException $e) {
            return json_encode($e);
        }
    }

    /**
     * Geeft alle data over een hoorzitting of gedachtenwisseling.
     * Gegevens worden door VP gebruikt om de fiche over een hoorzitting of gedachtewisseling op te bouwen.
     *
     * @param int $idHG     query en vereiste parameter. ID van de Hoorzitting/Gedachtewisseling.
     *
     * @return \Psr\Http\Message\StreamInterface|string
     */
    public function vindOpId(int $idHG)
    {
        try {
            $call = $this->client->get("hg/{$idHG}");
            return $call->getBody();
        } catch (RequestException $e) {
            return json_encode($e);
        }
    }
}
