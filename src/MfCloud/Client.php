<?php

namespace MfCloud;

use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\Client as Guzzle;
use MfCloud\Api\Billing;

class Client
{

    const BASE_URL = 'https://invoice.moneyforward.com/api';

    protected $accessToken, $apiVersion;

    /**
     * Create a new MfCloud client.
     */
    public function __construct(
        string $accessToken,
        Guzzle $guzzle = null,
        string $apiVersion = 'v1'
    ) {
        $this->accessToken = $accessToken;

        if (is_null($guzzle)) {
            $this->guzzle = new Guzzle([
                'headers' => [
                    'Authorization' => 'Bearer '.$this->accessToken,
                    'Content-Type' => 'application/json',
                    'Accept' => '*/*',
                ]
            ]);
        }

        $this->apiVersion = $apiVersion;
    }

    public function billings()
    {
        return new Billing($this);
    }

    public function get(string $path, array $params = [])
    {
        return $this->request('GET', $path, $params);
    }

    public function post(string $path, array $params = [])
    {
        return $this->request('POST', $path, $params);
    }

    protected function request(string $method, string $path, array $params = [])
    {
        $body = (string)$this->guzzle->request(
            $method,
            $this->buildUrl($path),
            $params
        )->getBody();

        return json_decode($body, true);
    }

    protected function buildUrl($path) : string
    {
        return implode('/', [static::BASE_URL, $this->apiVersion, $path]);
    }

}
