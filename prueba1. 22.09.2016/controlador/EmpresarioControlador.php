<?php  

/**
* 
*/
require_once'modelo/empresario.php';
class EmpresarioControlador
{
	private $modelo;

	public function __construct() {
		$this->modelo= new Empresario();
	}
	public function index()
	{
		require_once'vista/header.html';
		require_once'vista/empresario/crud_uno/index.php';
		require_once'vista/footer.html';
	}
	public function BaseDatos() 
	{
		require_once'vista/header.html';
		require_once'vista/empresario/Datos.php';
		require_once'vista/footer.html';
	}
	public function IndexAdmi() 
	{
		require_once'vista/header.html';
		require_once'vista/empresario/crud_uno/index.php';
		require_once'vista/footer.html';
	}
	public function insertar() 
	{
		require_once'vista/header.html';
		require_once'vista/empresario/crud_uno/insertar.php';
		require_once'vista/footer.html';
	}
	public function reportes() 
	{
		require_once'vista/header.html';
		require_once'vista/empresario/crud_uno/reportes.php';
		require_once'vista/footer.html';
	}
	public function delete() 
	{
		require_once'vista/header.html';
		require_once'vista/empresario/crud_uno/delete.php';
		require_once'vista/footer.html';
	}
	public function mostrar() 
	{
		$contratos= $this->modelo;
		$stmt= $this->modelo->listar($contratos);
		require_once'vista/header.html';
		require_once'vista/empresario/crud_uno/mostrar.php';
		require_once'vista/footer.html';
	}
	public function actualizar() 
	{
		$contratos= $this->modelo;
		$stmt= $this->modelo->listar($contratos);
		require_once'vista/header.html';
		require_once'vista/empresario/crud_uno/actualizar.php';
		require_once'vista/footer.html';
	}
		//:::::::::::::::

	public function Excel() 
	{
		$contratos= $this->modelo;
		$stmt= $this->modelo->listar($contratos);
		require_once'vista/header.html';
		require_once'vista/empresario/Reportes DATA-MUNDO/reporte_excel.php';
		require_once'vista/footer.html';
	}

	

	public function pdf() 
	{
		$contratos= $this->modelo;
		$stmt= $this->modelo->listar($contratos);
		require_once'vista/header.html';
		require_once'vista/empresario/Reportes DATA-MUNDO/reporte_pdf.php';
		require_once'vista/footer.html';
	}

	public function txt() 
	{
		$contratos= $this->modelo;
		$stmt= $this->modelo->listar($contratos);
		require_once'vista/header.html';
		require_once'vista/empresario/Reportes DATA-MUNDO/reporte_txt.php';
		require_once'vista/footer.html';
	}

	public function Word() 
	{
		$contratos= $this->modelo;
		$stmt= $this->modelo->listar($contratos);
		require_once'vista/header.html';
		require_once'vista/empresario/Reportes DATA-MUNDO/reporte_word.php';
		require_once'vista/footer.html';
	}



	//:::::::::::::::

	public function Excel2() 
	{
		$contratos= $this->modelo;
		$stmt= $this->modelo->listar($contratos);
		require_once'vista/header.html';
		require_once'vista/empresario/Reportes DATA-MUNDO/reporte_excel2.php';
		require_once'vista/footer.html';
	}

	

	public function pdf2() 
	{
		$contratos= $this->modelo;
		$stmt= $this->modelo->listar($contratos);
		require_once'vista/header.html';
		require_once'vista/empresario/Reportes DATA-MUNDO/reporte_pdf2.php';
		require_once'vista/footer.html';
	}

	public function txt2() 
	{
		$contratos= $this->modelo;
		$stmt= $this->modelo->listar($contratos);
		require_once'vista/header.html';
		require_once'vista/empresario/Reportes DATA-MUNDO/reporte_txt2.php';
		require_once'vista/footer.html';
	}

	public function Word2() 
	{
		$contratos= $this->modelo;
		$stmt= $this->modelo->listar($contratos);
		require_once'vista/header.html';
		require_once'vista/empresario/Reportes DATA-MUNDO/reporte_word2.php';
		require_once'vista/footer.html';
	}


	//:::::::::::::::

	public function Excel3() 
	{
		$contratos= $this->modelo;
		$stmt= $this->modelo->listar($contratos);
		require_once'vista/header.html';
		require_once'vista/empresario/Reportes DATA-MUNDO/reporte_excel3.php';
		require_once'vista/footer.html';
	}

	

	public function pdf3() 
	{
		$contratos= $this->modelo;
		$stmt= $this->modelo->listar($contratos);
		require_once'vista/header.html';
		require_once'vista/empresario/Reportes DATA-MUNDO/reporte_pdf3.php';
		require_once'vista/footer.html';
	}

	public function txt3() 
	{
		$contratos= $this->modelo;
		$stmt= $this->modelo->listar($contratos);
		require_once'vista/header.html';
		require_once'vista/empresario/Reportes DATA-MUNDO/reporte_txt3.php';
		require_once'vista/footer.html';
	}

	public function Word3() 
	{
		$contratos= $this->modelo;
		$stmt= $this->modelo->listar($contratos);
		require_once'vista/header.html';
		require_once'vista/empresario/Reportes DATA-MUNDO/reporte_word3.php';
		require_once'vista/footer.html';
	}


	//:::::::::::::::

	public function Excel4() 
	{
		$contratos= $this->modelo;
		$stmt= $this->modelo->listar($contratos);
		require_once'vista/header.html';
		require_once'vista/empresario/Reportes DATA-MUNDO/reporte_excel4.php';
		require_once'vista/footer.html';
	}

	

	public function pdf4() 
	{
		$contratos= $this->modelo;
		$stmt= $this->modelo->listar($contratos);
		require_once'vista/header.html';
		require_once'vista/empresario/Reportes DATA-MUNDO/reporte_pdf4.php';
		require_once'vista/footer.html';
	}

	public function txt4() 
	{
		$contratos= $this->modelo;
		$stmt= $this->modelo->listar($contratos);
		require_once'vista/header.html';
		require_once'vista/empresario/Reportes DATA-MUNDO/reporte_txt4.php';
		require_once'vista/footer.html';
	}

	public function Word4() 
	{
		$contratos= $this->modelo;
		$stmt= $this->modelo->listar($contratos);
		require_once'vista/header.html';
		require_once'vista/empresario/Reportes DATA-MUNDO/reporte_word4.php';
		require_once'vista/footer.html';
	}

	//:::::::::::::::

	public function Excel5() 
	{
		$contratos= $this->modelo;
		$stmt= $this->modelo->listar($contratos);
		require_once'vista/header.html';
		require_once'vista/empresario/Reportes DATA-MUNDO/reporte_excel5.php';
		require_once'vista/footer.html';
	}

	

	public function pdf5() 
	{
		$contratos= $this->modelo;
		$stmt= $this->modelo->listar($contratos);
		require_once'vista/header.html';
		require_once'vista/empresario/Reportes DATA-MUNDO/reporte_pdf5.php';
		require_once'vista/footer.html';
	}

	public function txt5() 
	{
		$contratos= $this->modelo;
		$stmt= $this->modelo->listar($contratos);
		require_once'vista/header.html';
		require_once'vista/empresario/Reportes DATA-MUNDO/reporte_txt5.php';
		require_once'vista/footer.html';
	}

	public function Word5() 
	{
		$contratos= $this->modelo;
		$stmt= $this->modelo->listar($contratos);
		require_once'vista/header.html';
		require_once'vista/empresario/Reportes DATA-MUNDO/reporte_word5.php';
		require_once'vista/footer.html';
	}

	//:::::::::::::::

	public function Excel6() 
	{
		$contratos= $this->modelo;
		$stmt= $this->modelo->listar($contratos);
		require_once'vista/header.html';
		require_once'vista/empresario/Reportes DATA-MUNDO/reporte_excel6.php';
		require_once'vista/footer.html';
	}

	

	public function pdf6() 
	{
		$contratos= $this->modelo;
		$stmt= $this->modelo->listar($contratos);
		require_once'vista/header.html';
		require_once'vista/empresario/Reportes DATA-MUNDO/reporte_pdf6.php';
		require_once'vista/footer.html';
	}

	public function txt6() 
	{
		$contratos= $this->modelo;
		$stmt= $this->modelo->listar($contratos);
		require_once'vista/header.html';
		require_once'vista/empresario/Reportes DATA-MUNDO/reporte_txt6.php';
		require_once'vista/footer.html';
	}

	public function Word6() 
	{
		$contratos= $this->modelo;
		$stmt= $this->modelo->listar($contratos);
		require_once'vista/header.html';
		require_once'vista/empresario/Reportes DATA-MUNDO/reporte_word6.php';
		require_once'vista/footer.html';
	}

	//:::::::::::::::

	public function Excel7() 
	{
		$contratos= $this->modelo;
		$stmt= $this->modelo->listar($contratos);
		require_once'vista/header.html';
		require_once'vista/empresario/Reportes DATA-MUNDO/reporte_excel7.php';
		require_once'vista/footer.html';
	}

	

	public function pdf7() 
	{
		$contratos= $this->modelo;
		$stmt= $this->modelo->listar($contratos);
		require_once'vista/header.html';
		require_once'vista/empresario/Reportes DATA-MUNDO/reporte_pdf7.php';
		require_once'vista/footer.html';
	}

	public function txt7() 
	{
		$contratos= $this->modelo;
		$stmt= $this->modelo->listar($contratos);
		require_once'vista/header.html';
		require_once'vista/empresario/Reportes DATA-MUNDO/reporte_txt7.php';
		require_once'vista/footer.html';
	}

	public function Word7() 
	{
		$contratos= $this->modelo;
		$stmt= $this->modelo->listar($contratos);
		require_once'vista/header.html';
		require_once'vista/empresario/Reportes DATA-MUNDO/reporte_word7.php';
		require_once'vista/footer.html';
	}
	public function crud() 
	{
		$contratos= $this->modelo;

		if (isset($_REQUEST['ID'])) {
			$contratos->setID($_REQUEST['ID']);
			$stmt= $contratos->consultar($contratos);
			if ($stmt) {
				require_once'vista/header.html';
				require_once'vista/empresario/crud_uno/editar.php';
				require_once'vista/footer.html';
				//editar
                }
			}
			else
			{
                $contratos->setNombre($_REQUEST['nombre']);
                $contratos->setApellido($_REQUEST['apellido']);
                $contratos->setCedula($_REQUEST['cedula']);
                $contratos->setDireccion($_REQUEST['direccion']);
                $contratos->setTelefono($_REQUEST['telefono']);

                $stmt= $this->modelo->insertar($contratos);
                 header("location:?controlador=empresario&accion=BaseDatos");
			}

	}
	public function editar() {
		$contratos= $this->modelo;

		$contratos->setID($_REQUEST['ID']);
		$contratos->setNombre($_REQUEST['Nombre']);
		$contratos->setApellido($_REQUEST['Apellido']);
		$contratos->setDireccion($_REQUEST['Direccion']);
		$contratos->setTelefono($_REQUEST['Telefono']);

		$stmt= $contratos->editar();
		if ($stmt==true) {
			header("location:?controlador=empresario&accion=actualizar");
		}
	}
	public function eliminar() {
		$contratos= $this->modelo;

		$contratos->setCedula($_REQUEST['Cedula']);

		$stmt= $contratos->eliminar($contratos);
		header("location:?controlador=empresario&accion=actualizar");
	}
}

?>