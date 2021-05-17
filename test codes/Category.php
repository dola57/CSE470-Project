<?php

namespace App\Models;

class Category
{	
	public $category;

	public $measurement;

    public $type;

	public function setCategory($category)
	{
		$this->category = $category;
	}

	public function getCategory()
	{
		return $this->category;
	}

    public function setMeasurement($measurement)
	{
		$this->measurement = $measurement;
	}

	public function getMeasurement()
	{
		return $this->measurement;
	}

    public function setType($type)
	{
		$this->type = $type;
	}

	public function getType()
	{
		return $this->type;
	}

}