<?php

namespace App\Models;

class Payment
{	
	public $type;

	public $money;

    public $price;

	public function setpaymentType($type)
	{
		$this->type = $type;
	}

	public function getpaymentType()
	{
		return $this->type;
	}

    public function setitemPrice($price)
	{
		$this->price = $price;
	}

    public function setitemMoney($money)
	{
		$this->money = $money;
	}


	public function check()
	{
        if($this->money<$this->price){
            return 'Failed to pay';
        }else{
            return 'payment complete';
        }
	}

}