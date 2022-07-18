<?php
namespace Udun\udunDispatch\Tests;
use PHPUnit\Framework\TestCase;
use udun\udunDispatch\Dispatch;

class ClientsTest extends TestCase
{

		    /**
     * @var string
     */
    private $merchant_no = '309626';

    /**
     * @var string
     */
    private $api_key= 'c789324a4383edbefbabd388ec8a3872';

    private $gateway_address= 'https://sig11.udun.io';
    private $callUrl = "https://localhost/callUrl";
	    /**
     *
     */
    public function testSupportCoins()
    {
        $result = (new Dispatch([
            'merchant_no' => $this->merchant_no,
            'api_key' => $this->api_key,
            'gateway_address'=>$this->gateway_address,
            'callUrl'=>$callUrl,
            'debug' => false
        ]))->supportCoins(true);
        var_dump($result);
        $this->assertArrayHasKey('data', $result);
    }
}