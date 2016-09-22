<?php  

/**
* 
*/
require_once'modelo/empresariodos.php';
class EmpresariodosControlador
{
	private $modelo;

	public function __construct() {
		$this->modelo= new Empresariodos();
	}
	public function index()
	{
		require_once'vista/header.html';
		require_once'vista/empresario/crud_dos/index.php';
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
		require_once'vista/empresario/crud_dos/insertar.php';
		require_once'vista/footer.html';
	}
	public function reportes() 
	{
		require_once'vista/header.html';
		require_once'vista/empresario/crud_dos/reportes.php';
		require_once'vista/footer.html';
	}
	public function delete() 
	{
		require_once'vista/header.html';
		require_once'vista/empresario/crud_dos/delete.php';
		require_once'vista/footer.html';
	}
	public function mostrar() 
	{
		$arriendos= $this->modelo;
		$stmt= $this->modelo->listar($arriendos);
		require_once'vista/header.html';
		require_once'vista/empresario/crud_dos/mostrar.php';
		require_once'vista/footer.html';
	}
	public function actualizar() 
	{
		$arriendos= $this->modelo;
		$stmt= $this->modelo->listar($arriendos);
		require_once'vista/header.html';
		require_once'vista/empresario/crud_dos/actualizar.php';
		require_once'vista/footer.html';
	}
	public function crud() 
	{
		$arriendos= $this->modelo;

		if (isset($_REQUEST['Numeropuesto'])) {
			$arriendos->setNumeropuesto($_REQUEST['Numeropuesto']);
			$stmt= $arriendos->consultar($arriendos);
			if ($stmt) {
				require_once'vista/header.html';
				require_once'vista/empresario/crud_dos/editar.php';
				require_once'vista/footer.html';
				//editar
                }
			}
			else
			{
                $arriendos->setNumeropuesto($_REQUEST['numeropuesto']);
                $arriendos->setFechainicio($_REQUEST['fechainicio']);
                $arriendos->setFechafin($_REQUEST['fechafin']);
                $arriendos->setCostoarriendo($_REQUEST['costoarriendo']);

                $stmt= $this->modelo->insertar($arriendos);
                 header("location:?controlador=empresariodos&accion=BaseDatos");
			}

	}
	public function editar() {
		$arriendos= $this->modelo;

		$arriendos->setNumeropuesto($_REQUEST['Numeropuesto']);
		$arriendos->setNombre($_REQUEST['Nombre']);
		$arriendos->setApellido($_REQUEST['Apellido']);
		$arriendos->setDireccion($_REQUEST['Direccion']);
		$arriendos->setTelefono($_REQUEST['Telefono']);

		$stmt= $arriendos->editar();
		if ($stmt==true) {
			header("location:?controlador=empresariodos&accion=actualizar");
		}
	}
	public function eliminar() {
		$arriendos= $this->modelo;

		$arriendos->setNumeropuesto($_REQUEST['numeropuesto']);

		$stmt= $arriendos->eliminar($arriendos);
		header("location:?controlador=empresariodos&accion=mostrar");
	}
}

?>