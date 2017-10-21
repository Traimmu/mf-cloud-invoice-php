<?php

namespace Traimmu\MfCloud\Invoice;

use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\Client as Guzzle;
use Traimmu\MfCloud\Invoice\Api\Office;
use Traimmu\MfCloud\Invoice\Api\Partner;
use Traimmu\MfCloud\Invoice\Api\Item;
use Traimmu\MfCloud\Invoice\Api\Billing;

class Client
{

    const BASE_URL = 'https://invoice.moneyforward.com/api';

    protected $accessToken, $apiVersion;

    /**
     * Create a new Traimmu\MfCloud\Invoice client.
     */
    public function __construct(
        string $accessToken,
        Guzzle $guzzle = null,
        string $apiVersion = 'v1'
    ) {
        $this->accessToken = $accessToken;

        if (is_null($guzzle)) {
            $guzzle = new Guzzle([
                'headers' => [
                    'Authorization' => 'Bearer '.$this->accessToken,
                    'Content-Type' => 'application/json',
                    'Accept' => '*/*',
                ]
            ]);
        }

        $this->guzzle = $guzzle;

        $this->apiVersion = $apiVersion;
    }

    public function office()
    {
        return (new Office($this))->first();
    }

    public function items()
    {
        return new Item($this);
    }

    public function partners()
    {
        return new Partner($this);
    }

    public function billings()
    {
        return new Billing($this);
    }

    public function get(string $path, array $params = []) : array
    {
        return $this->request('GET', $path, $params);
    }

    public function post(string $path, array $params = []) : array
    {
        return $this->request('POST', $path, $params);
    }

    public function put(string $path, array $params = []) : array
    {
        return $this->request('PUT', $path, $params);
    }

    public function delete(string $path) : array
    {
        return $this->request('DELETE', $path);
    }

    protected function request(string $method, string $path, array $params = []) : array
    {
        $body = $this->guzzle->request(
            $method,
            $this->buildUrl($path),
            $params
        )->getBody();

        return json_decode((string)$body, true);
    }

    protected function buildUrl($path) : string
    {
        return implode('/', [static::BASE_URL, $this->apiVersion, $path]);
    }

}
