<?php

namespace App;

class Tablero
{
	private $order;

	private function __construct()
	{
		$this->order = [];
	}

	private function show_order()
	{
		return $this->order;
	}

	public function add(int $pos)
	{
		if (strlen($this->order) % 2 == 0)
		{
			$ficha = new Ficha("rojo");
		}
		else
		{
			$ficha = new Ficha("azul");	
		}
		array_push($this->order, ($ficha, $pos));
	}
}

?>