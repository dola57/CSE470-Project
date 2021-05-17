<?php

class PaymentTest extends \PHPUnit\Framework\TestCase
{
	//protected function getUserModel(){}

	protected $Payment;

	public function setUp() :void
	{
		//the line below can be used to check whether setUp runs before each test block.
		//var_dump('1');

		$this->Payment = new \App\Models\Payment;

		//the line below shows actual use case of setUp() as repeating the line below for every test is unnecessary.
		//$this->user = new \App\Models\User;(['email' => 'alex@codesource.com']);
		
	}


	public function testgetPrice()
	{
		$Payment = new \App\Models\Payment;

		$Payment->setpaymentType('Bkash');

		$this->assertEquals($Payment->getpaymentType(), 'Bkash');
	}

    public function testcheck()
	{
		$Payment = new \App\Models\Payment;

		$Payment->setitemPrice(1000);
        $Payment->setitemMoney(700);

		$this->assertEquals($Payment->check(), 'Failed to pay');
	}

}