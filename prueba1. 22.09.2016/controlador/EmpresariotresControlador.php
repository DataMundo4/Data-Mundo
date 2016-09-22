<?php  

/**
* 
*/
require_once'modelo/empresariotres.php';
class EmpresariotresControlador
{
	private $modelo;

	public function __construct() {
		$this->modelo= new Empresariotres();
	}
	public function index()
	{
		require_once'vista/header.html';
		require_once'vista/empresario/crud_tres/index.php';
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
		require_once'vista/empresario/crud_tres/insertar.php';
		require_once'vista/footer.html';
	}
	public function reportes() 
	{
		require_once'vista/header.html';
		require_once'vista/empresario/crud_tres/reportes.php';
		require_once'vista/footer.html';
	}
	public function delete() 
	{
		require_once'vista/header.html';
		require_once'vista/empresario/crud_tres/delete.php';
		require_once'vista/footer.html';
	}
	public function mostrar() 
	{
		$inmuebles= $this->modelo;
		$stmt= $this->modelo->listar($inmuebles);
		require_once'vista/header.html';
		require_once'vista/empresario/crud_tres/mostrar.php';
		require_once'vista/footer.html';
	}
	public function actualizar() 
	{
		$inmuebles= $this->modelo;
		$stmt= $this->modelo->listar($inmuebles);
		require_once'vista/header.html';
		require_once'vista/empresario/crud_tres/actualizar.php';
		require_once'vista/footer.html';
	}
	public function crud() 
	{
		$inmuebles= $this->modelo;

		if (isset($_REQUEST['ID_PUESTO'])) {
			$inmuebles->setID_PUESTO($_REQUEST['ID_PUESTO']);
			$stmt= $inmuebles->consultar($inmuebles);
			if ($stmt) {
				require_once'vista/header.html';
				require_once'vista/empresario/crud_tres/editar.php';
				require_once'vista/footer.html';
				//editar
                }
			}
			else
			{
                $inmuebles->setCostoactual($_REQUEST['costoactual']);
                $inmuebles->setDireccion($_REQUEST['direccion']);
                $inmuebles->setPisopuesto($_REQUEST['pisopuesto']);

                $stmt= $this->modelo->insertar($inmuebles);
                 header("location:?controlador=empresariotres&accion=BaseDatos");
			}

	}
	public function editar() {
		$inmuebles= $this->modelo;

		$inmuebles->setNumeropuesto($_REQUEST['Numeropuesto']);
		$inmuebles->setNombre($_REQUEST['Nombre']);
		$inmuebles->setApellido($_REQUEST['Apellido']);
		$inmuebles->setDireccion($_REQUEST['Direccion']);
		$inmuebles->setTelefono($_REQUEST['Telefono']);

		$stmt= $inmuebles->editar();
		if ($stmt==true) {
			header("location:?controlador=empresariotres&accion=actualizar");
		}
	}
	public function eliminar() {
		$inmuebles= $this->modelo;

		$inmuebles->setID_PUESTO($_REQUEST['puesto']);

		$stmt= $inmuebles->eliminar($inmuebles);
		header("location:?controlador=empresariotres&accion=mostrar");
	}
}

?>