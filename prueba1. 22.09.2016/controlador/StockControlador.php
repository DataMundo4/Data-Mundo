<?php 

require_once'modelo/stock.php';

class StockControlador
{
	private $model;


	public function __construct() {

		$this->model= new Stock();
	}

	public function Index(){
		$stock= $this->model;
		$stmt= $stock->listar($stock);
		require_once'vista/header.html';
		require_once'vista/stock/index.php';
		require_once'vista/footer.html';
	}

		public function mostrar() 
	{
		$stock= $this->model;
		$stmt= $stock->listar($stock);
		require_once'vista/header.html';
		require_once'vista/stock/index.php';
		require_once'vista/footer.html';
	}

 }



?>
 