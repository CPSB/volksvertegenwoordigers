<?php

namespace ActivismeBe\Parlement;

use GuzzleHttp\Exception\RequestException;

class Commissie extends Base
{
    public function huidige()
    {
        try {
            $call = $this->client->get('comm/huidige');
            return $call->getBody();
        } catch (RequestException $e) {
            return json_encode($e);
        }
    }

    public function legislatuur($legislatuur = null)
    {
        try {
            if (is_null($legislatuur)) {
                $call = $this->client->get('comm/legislatuur');
            } else {
                $call = $this->client->get('comm/legislatuur?legislatuur=' . $legislatuur);
            }

            return $call->getBody();
        } catch (RequestException $e) {
            return json_encode($e);
        }
    }

    public function lijst($commissieIds = null)
    {
        try {
            $param = str_replace(',','%2C', $commissieIds);
            $call  = $this->client->get('comm/lijst?id=' . $param);

            return $call->getBody();
        } catch (RequestException $e) {
            return json_encode($e);
        }
    }

    public function vorige()
    {
        try {
            $call = $this->client->get('comm/vorige');
            return $call->getBody();
        } catch (RequestException $e) {
            return json_encode($e);
        }
    }

    public function commissieBijId(int $commissieId, $datum = null )
    {
        try {
            $uri = "comm/{$commissieId}";

            if (! is_null($datum)) {
                $uri = "{$uri}?datum={$datum}";
            }

            $call = $this->client->get($uri);
            return $call->getBody();
        } catch (RequestException $e) {
            return json_encode($e);
        }
    }

    public function commissieAdreslijst(int $commissieId)
    {
        try {
            $call = $this->client->get("comm/{$commissieId}/adreslijst");
            return $call->getBody();
        } catch (RequestException $e) {
            return json_encode($e);
        }
    }

    public function commissieAlleStvz(int $commissieId)
    {
        try {
            $call = $this->client->get("comm/{$commissieId}/alle-stvz");
            return $call->getBody();
        } catch(RequestException $e) {
            return json_encode($e);
        }
    }

    public function standVanZaken(int $commissieId, $status = null)
    {
        if (is_null($status)) { $status = 'TE_BEHAND'; }

        try {
            $call = $this->client->get("comm/{$commissieId}/stvz?status={$status}");
            return $call->getBody();
        } catch (RequestException $e) {
            return json_encode($e);
        }
    }

    public function verslagen(int $commissieId)
    {
        try {
            $call = $this->client->get("comm/{$commissieId}/verslagen");
            return $call->getBody();
        } catch (RequestException $e) {
            return json_encode($e);
        }
    }

    public function VergaderingGepland(int $commissieId)
    {
        try {
            $call = $this->client->get("comm/{$commissieId}/vrg_gepland");
            return $call->getBody();
        } catch (RequestException $e) {
            return json_encode($e);
        }
    }
}
