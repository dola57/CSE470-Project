<?php

class CalculatePriceTest extends \PHPUnit\Framework\TestCase
{
	//protected function getUserModel(){}

	protected $CalculatePrice;

	public function setUp() :void
	{
		//the line below can be used to check whether setUp runs before each test block.
		//var_dump('1');

		$this->CalculatePrice = new \App\Models\CalculatePrice;

		//the line below shows actual use case of setUp() as repeating the line below for every test is unnecessary.
		//$this->user = new \App\Models\User;(['email' => 'alex@codesource.com']);
		
	}


	public function testgetPrice()
	{
		$CalculatePrice = new \App\Models\CalculatePrice;

		$CalculatePrice->setPrice(500,5);

		$this->assertEquals($CalculatePrice->getPrice(), 2500);
	}

    public function testgetQuantity()
	{
		$CalculatePrice = new \App\Models\CalculatePrice;

		$CalculatePrice->setQuantity(500);

		$this->assertEquals($CalculatePrice->getQuantity(), 500);
	}

}