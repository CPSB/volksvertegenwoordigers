<?php

namespace ActivismeBe\Parlement;

use GuzzleHttp\Exception\RequestException;

class Hoorzitting extends Base
{
    public function lijst(int $hoorzittingId)
    {
        try {
            $call = $this->client->get("hg/lijst?id={$hoorzittingId}");
            return $call->getBody();
        } catch (RequestException $e) {
            return json_encode($e);
        }
    }

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
