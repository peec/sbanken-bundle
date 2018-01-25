<?php

namespace Pkj\Bundle\SbankenBundle\Sbanken;

use Pkj\Sbanken\Credentials;
use Pkj\Sbanken\Client as SbankenClient;

class Client
{

    /**
     * @var Credentials
     */
    private $credentials;

    /**
     * @var SbankenClient
     */
    private $api;

    public function __construct($clientId, $clientSecret, $customerId)
    {

        $credentials = new Credentials(
            $clientId,
            $clientSecret,
            $customerId
        );

        $this->credentials = $credentials;

        $this->api = SbankenClient::factory($credentials);
    }

    public function getApi()
    {
        return $this->api;
    }




}