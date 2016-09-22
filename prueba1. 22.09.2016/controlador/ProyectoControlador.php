<?php 


 /**
 * 
 */
 require_once'modelo/usuario.php';
 class ProyectoControlador
 {
 	private $model;

 	public function __construct()
 	{
 		$this->model = new Usuario();
 	}

 	public function Index(){
 		/*$usuario = $this->model;
		$stmt= $usuario->listar($usuario);*/
 		require_once'vista/header.html';
 		require_once'vista/proyecto/index.php';
 		require_once'vista/footer.html';
 	}
 	public function mision(){
 		require_once'vista/header.html';
 		require_once'vista/proyecto/mision.php';
 		require_once'vista/footer.html';
 	}
 	public function vision(){
 		require_once'vista/header.html';
 		require_once'vista/proyecto/vision.php';
 		require_once'vista/footer.html';
 	}
 	public function objetivos() {
 		require_once'vista/header.html';
 		require_once'vista/proyecto/objetivos.php';
 		require_once'vista/footer.html';
 	}
 	public function sesion() {
 		require_once'vista/header.html';
 		require_once'vista/proyecto/sesion.php';
 		require_once'vista/footer.html';
 	}
 	public function conocenos() {
 		require_once'vista/header.html';
 		require_once'vista/proyecto/conocenos.php';
 		require_once'vista/footer.html';
 	}
 	public function logeo() {
 		$usuarios= $this->model;

 		$usuarios->setUsuario($_REQUEST['usuario']);
 		$usuarios->setPassword($_REQUEST['password']);

 		$stmt= $this->model->logeo($usuarios);

 		switch ($stmt['rol']) {
 			case 'empresario':
 			session_start();
 				header("location:?controlador=Empresario&accion=index");
 				$_SESSION['doc_empresario'] = $stmt['documento'];
 				break;
 			case 'usuario':
 			session_start();
 				header("location:?controlador=Usuario&accion=index");
 				$_SESSION['doc_usuario'] = $stmt['documento'];
 				break;
 			
 			default:
 				header("location:index.php");
 				break;
 		}
 	}
 	public function salir() {
 		session_start();
 		session_destroy();
 		header("location:index.php");
 	}


 }

 ?>