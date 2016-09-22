<?php  



require_once'modelo/conexion.php';
$controlador='proyecto';

if (!isset($_REQUEST['controlador'])) {
	$controlador= ucwords($controlador).'Controlador';
	require_once'controlador/'.$controlador.'.php';
	$controlador= new $controlador;
	$controlador->Index();
}
else {
	$controlador= ucwords($_REQUEST['controlador']).'Controlador';
	$accion= isset($_REQUEST['accion']) ? $_REQUEST['accion'] : 'Index';
	require_once'controlador/'.$controlador.'.php';
	$controlador= new $controlador;

	call_user_func(array($controlador,$accion));
}
?>