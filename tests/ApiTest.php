<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use Traimmu\MfCloud\Invoice\Client;

final class ApiTest extends TestCase
{

    public function setUp()
    {
        $this->client = new Client('MFCLOUD_INVOICE_API_TOKEN');
    }

    public function testGet()
    {
        $this->assertEquals(2, 1 + 1);
    }
}
