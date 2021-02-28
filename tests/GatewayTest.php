<?php

namespace Omnipay\Municipay;

use Omnipay\Tests\GatewayTestCase;

class GatewayTest extends GatewayTestCase
{
    private $options;

    public function setUp()
    {
        parent::setUp();

        $this->gateway = new Gateway($this->getHttpClient(), $this->getHttpRequest());

        $this->gateway->initialize([
            'accountId' => 'RT26097',
            'testMode' => true
        ]);

        $this->options = [
            'PayerName' => 'John Doe',
            'Address' => '2310  Elliot Avenue',
            'City' => 'Seattle',
            'State' => 'WA',
            'Zip' => '98115',
            'Email' => 'john@testing.com',
            'Payment_Amount' => 150.00,
            'Customer_Number' => 120
        ];
    }

    public function testPurchase()
    {
        $request = $this->gateway->purchase($this->options)->send();

        $this->assertInstanceOf('\Omnipay\PaymentServiceNetwork\Message\PurchaseResponse', $request);
        $this->assertArrayHasKey('Payment_Amt', $request->getData());
        $this->assertEquals('150', $request->getData()['Payment_Amt']);
        $this->assertTrue($request->isRedirect());

    }

    public function testCompletePurchase()
    {

        $this->getHttpRequest()->request->replace([
            'Trans_ID' => '1820200366853804840',
            'Name' => 'John Doe',
            'Payment_Amt' => 150.00,
            'Customer_ID' => 2342,
            'Payment_Status' => 'Approved'
        ]);

        $response = $this->gateway->completePurchase()->send();

        $this->assertEquals('1820200366853804840', $response->getTransactionReference());
        $this->assertTrue($response->isSuccessful());

        $data = $response->getData();

        $this->assertEquals('2342', $data['Customer_ID']);
        $this->assertEquals('150.00', $data['Payment_Amt']);
    }
}