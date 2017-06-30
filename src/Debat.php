<?php 

namespace ActivismeBe\Parlement; 

use GuzzleHttp\Exception\RequestException;

class Debat extends Base
{
    public function debatLijst(int $debatId)
    {
        try {
            $call = $this->client->get('debat/lijst', ['query' => ['id' => $debatId]]);
            return $call->getBody();
        } catch (RequestException $e) {
            return json_encode($e);
        }
    }

    public function debatBijId(int $debatId) 
    {
        try {
            $call = $this->client->get("debat/{$debatId}");
            return $call->getBody(); // Returns nothing when no data is found with the id.
        } catch (RequestException $e) {
            return json_encode($e);
        }
    }
}