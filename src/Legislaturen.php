<?php

namespace ActivismeBe\Parlement;

use GuzzleHttp\Exception\RequestException;

class Legislaturen extends Base
{
    public function alle()
    {
        try {
            $call = $this->client->get('leg/alle');
            return $call->getBody();
        } catch (RequestException $e) {
            return json_encode($e);
        }

    }
}
