<?php

namespace App;

class Ficha
{
	private $color;

	private function __construct(string $col)
	{
		$this->color = $col;
	}

	public function show_color()
	{
		return $this->color;
	}
}

?>