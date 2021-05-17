<?php

namespace App\Models;

class User
{
	public $first_name;

	public $email;
	
	public $contact;


	public function setFirstName($firstName)
	{
		$this->first_name = $firstName;

	}

	public function getFirstName()
	{
		return $this->first_name;
	}


	public function setEmail($email)
	{
		$this->email = $email;
	}

	public function getEmail()
	{
		return $this->email;
	}

	public function setContact($contact)
	{
		$this->contact = $contact;

	}

	public function getContact()
	{
		return $this->contact;
	}
}