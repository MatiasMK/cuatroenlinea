<?php

namespace App;

class Ficha
{
	private $color;
	//guarda el color de las fichas

	private function __construct(string $col)
	{
		$this->color = $col;
	}

	public function show_color()
	{
		return $this->color;
	}
	//muestra el color de la ficha
}

?>