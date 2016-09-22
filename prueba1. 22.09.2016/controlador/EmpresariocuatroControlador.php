<?php  

/**
* 
*/
require_once'modelo/empresariocuatro.php';
class EmpresariocuatroControlador
{
	private $modelo;

	public function __construct() {
		$this->modelo= new Empresariocuatro();
	}
	public function index()
	{
		require_once'vista/header.html';
		require_once'vista/empresario/crud_cuatro/index.php';
		require_once'vista/footer.html';
	}
	public function BaseDatos() 
	{
		require_once'vista/header.html';
		require_once'vista/empresario/Datos.php';
		require_once'vista/footer.html';
	}
	public function insertar() 
	{
		require_once'vista/header.html';
		require_once'vista/empresario/crud_cuatro/insertar.php';
		require_once'vista/footer.html';
	}
	public function reportes() 
	{
		require_once'vista/header.html';
		require_once'vista/empresario/crud_cuatro/reportes.php';
		require_once'vista/footer.html';
	}
	public function delete() 
	{
		require_once'vista/header.html';
		require_once'vista/empresario/crud_cuatro/delete.php';
		require_once'vista/footer.html';
	}
	public function mostrar() 
	{
		$manejodecontrato= $this->modelo;
		$stmt= $this->modelo->listar($manejodecontrato);
		require_once'vista/header.html';
		require_once'vista/empresario/crud_cuatro/mostrar.php';
		require_once'vista/footer.html';
	}
	public function actualizar() 
	{
		$manejodecontrato= $this->modelo;
		$stmt= $this->modelo->listar($manejodecontrato);
		require_once'vista/header.html';
		require_once'vista/empresario/crud_cuatro/actualizar.php';
		require_once'vista/footer.html';
	}
	public function crud() 
	{
		$manejodecontrato= $this->modelo;

		if (isset($_REQUEST['ID_DEUDA'])) {
			$manejodecontrato->setID_DEUDA($_REQUEST['ID_DEUDA']);
			$stmt= $manejodecontrato->consultar($manejodecontrato);
			if ($stmt) {
				require_once'vista/header.html';
				require_once'vista/empresario/crud_cuatro/editar.php';
				require_once'vista/footer.html';
				//editar
                }
			}
			else
			{
                $manejodecontrato->setNumeropuesto($_REQUEST['numeropuesto']);
                $manejodecontrato->setTiempodeuda($_REQUEST['tiempodeuda']);
                $manejodecontrato->setValordeuda($_REQUEST['valordeuda']);

                $stmt= $this->modelo->insertar($manejodecontrato);
                 header("location:?controlador=empresariocuatro&accion=BaseDatos");
			}

	}
	public function editar() {
		$manejodecontrato= $this->modelo;

		$manejodecontrato->setID_DEUDA($_REQUEST['ID_DEUDA']);
		$manejodecontrato->setNumeropuesto($_REQUEST['numeropuesto']);
        $manejodecontrato->setTiempodeuda($_REQUEST['tiempodeuda']);
        $manejodecontrato->setValordeuda($_REQUEST['valordeuda']);

		$stmt= $manejodecontrato->editar();
		if ($stmt==true) {
			header("location:?controlador=empresariocuatro&accion=actualizar");
		}
	}
	public function eliminar() {
		$manejodecontrato= $this->modelo;

		$manejodecontrato->setID_DEUDA($_REQUEST['deuda']);

		$stmt= $manejodecontrato->eliminar($manejodecontrato);
		header("location:?controlador=empresariocuatro&accion=actualizar");
	}
}

?>