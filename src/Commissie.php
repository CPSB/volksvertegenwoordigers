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

    }

    public function commissieBijId()
    {

    }

    public function commissieAdreslijst()
    {

    }

    public function commissieAlleStvz()
    {

    }

    public function standVanZaken() 
    {

    }

    public function verslagen()
    {

    }

    public function VergaderingGepland() 
    {

    }
}