<?php

namespace ActivismeBe\Parlement;

use GuzzleHttp\Exception\RequestException;

class Documenten extends Base
{
    public function vind(int $documentId)
    {
        try {
            $call = $this->client->get("link/{$documentId}");
            return $call->getBody();
        } catch (RequestException $e) {
            return json_encode($e);
        }
    }
}
