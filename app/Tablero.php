<?php

namespace App;

class Tablero
{
	private $order; 
	//Guarda las fichas que se juegan en el tablero en tuplas
	//de la forma ('ficha de tipo Ficha', 'posicion en la que 
	//se coloca la ficha del 1 al 7, orden izquierda a derecha')

	private function __construct()
	{
		restart();
	}

	public function show_order()
	{
		return $this->order;
	}
	//muestra la lista donde se guardan las fichas en orden

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
	//añade una ficha a la lista de orden, asignandole la posicion dada

	public function restart()
	{
		$this->order = [];
	}
	//limpia el tablero
}

?>