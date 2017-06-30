<?php

namespace ActivismeBe\Parlement;

use GuzzleHttp\Exception\RequestException;

class Statistieken extends Base
{
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
