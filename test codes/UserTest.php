<?php

class UserTest extends \PHPUnit\Framework\TestCase
{
	//protected function getUserModel(){}

	protected $user;

	public function setUp() :void
	{
		//the line below can be used to check whether setUp runs before each test block.
		//var_dump('1');

		$this->user = new \App\Models\User;

		//the line below shows actual use case of setUp() as repeating the line below for every test is unnecessary.
		//$this->user = new \App\Models\User;(['email' => 'alex@codesource.com']);
		
	}


	public function testgetFirstName()
	{
		$this->user->setFirstName('Dola');

		$this->assertEquals($this->user->getFirstName(), 'Dola');
	}


	public function testgetEmailAddress()
	{
		$user = new \App\Models\User;

		$user->setEmail('doladola@gmail.com');

		$this->assertEquals($user->getEmail(), 'doladola@gmail.com');
	}


	public function testgetContact()
	{
		$user = new \App\Models\User;

		$user->setContact('01665432267');

		$this->assertEquals($user->getContact(), '01665432267');
	}

}