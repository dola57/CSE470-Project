<?php

namespace App\Models;

class CalculatePrice
{	
	public $price;

	public $quantity;

	public function setPrice($price, $quantity)
	{
		$this->price = $price * $quantity;
	}

	public function getPrice()
	{
		return $this->price;
	}

    public function setQuantity($quantity)
	{
		$this->quantity = $quantity;
	}

	public function getQuantity()
	{
		return $this->quantity;
	}

}