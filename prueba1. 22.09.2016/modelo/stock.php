<?php 

/**
* 
*/
class Stock extends Conexion
{
	private $ID_CAT,$Costo,$Descripcion,$Ubicacion,$Piso,$Area,$Estrato,$Sector;
	private $model;

	public function __construct()
	{
		$this->model= parent::__construct();
	}
	public function getID_CAT(){
		return $this->id_cat;
	}
	public function setID_CAT($id_cat) {
		$this->id_cat = $id_cat;
	}
	public function getCosto(){
		return $this->costo;
	}
	public function setCosto($costo) {
		$this->costo= $costo;
	}
	public function getDescripcion() {
		return $this->descripcion;
	}
	public function setDescripcion($descripcion) {
		$this->descripcion= $descripcion;
	}
	public function getUbicacion(){
		return $this->ubicacion;
	}
	public function setUbicacion($ubicacion){
		$this->ubicacion= $ubicacion;
	}
	public function getPiso() {
		return $this->piso;
	}
	public function setPiso($piso){
		$this->piso= $piso;
	}
	public function getArea() {
		return $this->area;
	}
	public function setArea($area){
		$this->area= $area;
	}

	public function getEstrato() {
		return $this->estrato;
	}
	public function setEstrato($estrato){
		$this->estrato= $estrato;
	}
	public function getSector() {
		return $this->sector;
	}
	public function setSector($sector){
		$this->sector= $sector;
	}

	public function listar() {
		try {
			$query="SELECT * FROM catalogos";
			$stmt= $this->model->prepare($query);
			$stmt->execute();

			return $stmt->fetchAll(PDO::FETCH_OBJ);
		} catch (PDOException $e) {
			return false;
		}
	}

	
}
?>


