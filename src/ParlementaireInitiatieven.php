<?php

namespace ActivismeBe\Parlement;

use GuzzleHttp\Exception\RequestException;

class ParlementaireInitiatieven extends Base
{
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
