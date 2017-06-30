<?php

namespace ActivismeBe\Parlement;

use GuzzleHttp\Exception\RequestException;

class JournaalLijn extends base
{
    public function vind(int $id)
    {
        try {
            $call = $this->client->get("jln/{$id}");
            return $call->getBody();
        } catch (RequestException $e) {
            return json_encode($e);
        }
    }
}
