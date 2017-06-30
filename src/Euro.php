<?php

namespace ActivismeBe\Parlement;

use GuzzleHttp\Exception\RequestException;

class Euro extends Base
{
    public function lijst(int $euroId)
    {
        try {
            $call = $this->client->get("euro/lijst?id={$euroId}");
            return $call->getBody();
        } catch (RequestException $e) {
            return json_encode($e);
        }
    }

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
