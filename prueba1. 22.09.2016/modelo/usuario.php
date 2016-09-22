<?php  


/**
* 
*/
class Usuario extends Conexion
{
	
	private $Usuario,$Password;
	private $model;

	public function __construct()
	{
		$this->model= parent::__construct();
	}
	public function getUsuario() {
		return $this->Usuario;
	}
	public function setUsuario($Usuario) {
		$this->Usuario= $Usuario;
	}
	public function getPassword() {
		return $this->Password;
	}
	public function setPassword($Password) {
		$this->Password= $Password;
	}
	public function logeo() {
		$query="SELECT * FROM sesion WHERE Usuario='".$this->Usuario."'AND Password='".$this->Password."'";

		$stmt= $this->model->prepare($query);
		$stmt->execute();

		return $stmt->fetch(PDO::FETCH_ASSOC);
	}
}


?>