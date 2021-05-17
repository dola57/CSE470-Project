<?php

class CategoryTest extends \PHPUnit\Framework\TestCase
{
	//protected function getUserModel(){}

	protected $Category;

	public function setUp() :void
	{
		//the line below can be used to check whether setUp runs before each test block.
		//var_dump('1');

		$this->Category = new \App\Models\Category;

		//the line below shows actual use case of setUp() as repeating the line below for every test is unnecessary.
		//$this->user = new \App\Models\User;(['email' => 'alex@codesource.com']);
		
	}


	public function testgetCategory()
	{
		$Category = new \App\Models\Category;

		$Category->setCategory('Men');

		$this->assertEquals($Category->getCategory(), 'Men');
	}

    public function testgetMeasurement()
	{
		$Category = new \App\Models\Category;

		$Category->setMeasurement('M');

		$this->assertEquals($Category->getMeasurement(), 'M');
	}

    public function testgetType()
	{
		$Category = new \App\Models\Category;

		$Category->setType('Teeshirt');

		$this->assertEquals($Category->getType(), 'Teeshirt');
	}

}