<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use GuzzleHttp\Client as Guzzle;
use Traimmu\MfCloud\Invoice\Client;
use Traimmu\MfCloud\Invoice\Models\Office;
use Traimmu\MfCloud\Invoice\Api\Item;

final class ClientRequestTest extends TestCase
{

    protected $client;

    public function setUp()
    {
        $body = $this->getMockBuilder(\StdClass::class)
                       ->setMethods(['__toString'])
                       ->getMock();
        $body->expects($this->once())
               ->method('__toString')
               ->willReturn(json_encode(['name' => '株式会社Traimmu']));

        $promise = $this->getMockBuilder(\StdClass::class)
                       ->setMethods(['getBody'])
                       ->getMock();
        $promise->expects($this->once())
               ->method('getBody')
               ->willReturn($body);

        $guzzle = $this->getMockBuilder(Guzzle::class)
                       ->setMethods(['request'])
                       ->getMock();

        $guzzle->expects($this->once())
               ->method('request')
               ->willReturn($promise);

        $this->client = new Client('MFCLOUD_INVOICE_API_TOKEN', $guzzle);
    }

    public function testCanMakeGetRequest()
    {
        $this->expectHttpMethod('GET');
        $this->client->get('/');
    }

    public function testCanMakePostRequest()
    {
        $this->expectHttpMethod('POST');
        $this->client->post('/');
    }

    public function testCanMakePutRequest()
    {
        $this->expectHttpMethod('PUT');
        $this->client->put('/');
    }

    public function testCanMakeDeleteRequest()
    {
        $this->expectHttpMethod('DELETE');
        $this->client->delete('/');
    }

    public function testGetOfficeReturnsOfficeModelInstance()
    {
        $this->expectHttpMethod('GET');
        $this->assertInstanceOf(Office::class, $this->client->office());
    }

    private function expectHttpMethod(string $method)
    {
        $this->client->guzzle->method('request')->with($this->equalTo($method));
        return $this;
    }

}
