<?php

namespace ActivismeBe\Parlement;

use GuzzleHttp\Exception\RequestException;

class SchriftelijkeVraag extends Base
{
    public function lijst(int $ids = null)
    {
        try {
            $param = str_replace(',','%2C', $ids);
            $call = $this->client->get("schv/lijst?id={$param}");

            return $call->getBody();
        } catch (RequestException $e) {
            return json_encode($e);
        }
    }

    public function schriftelijkeVraag(int $idSchv)
    {
        try {
            $call = $this->client->get("schv/{$idSchv}");
            return $call->getBody();
        } catch (RequestException $e) {
            return json_encode($e);
        }
    }
}
