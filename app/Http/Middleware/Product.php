<?php

namespace App\Http\Middleware;


class Product {
	public $id = null;
	public $quantity = 0;
	public $color = null;
	public $size = null;

	public function __construct($id, $quantity, $color, $size)
	{
		$this->id = $id;
		$this->quantity = $quantity;
		$this->color = $color;
		$this->size = $size;
	}
}