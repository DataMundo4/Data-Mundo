<?php

header("Content-type: application/vnd.ms-word");
header("Content-Disposition: attachment; filename=Reporte_Personal_usuarios.doc");


		$conexion=mysql_connect("localhost","root","");
		mysql_select_db("empresario",$conexion);		


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>LISTA DE Contratos</title>
</head>
<body>
<table width="676%" height="622" border="1" cellpadding="0" cellspacing="1">
  <tr>
    <td colspan="6" bgcolor="skyblue"><CENTER><strong>REPORTE DE LA TABLA CONTRATOS EN WORD</strong></CENTER></td>
  </tr>
  <tr bgcolor="red">
    <td width="2%"><strong>ID</strong></td>
    <td width="6%"><strong>Nombre</strong></td>
    <td width="7%"><strong>Apellido	</strong></td>
    <td width="7%"><strong>Cedula</strong></td>
    <td width="8%"><strong>Direccion</strong></td>
    <td width="11%"><strong>Telefono</strong></td>
  </tr>
  
<?PHP
		
$sql=mysql_query("select * from contratos");
while($res=mysql_fetch_array($sql)){		

	$ID=$res["ID"];
	$Nombre=$res["Nombre"];
	$Apellido=$res["Apellido"];
	$Cedula=$res["Cedula"];
	$Direccion=$res["Direccion"];
	$Telefono=$res["Telefono"];		

?>  
 <tr>
	<td><?php echo $ID; ?></td>
	<td><?php echo $Nombre; ?></td>
	<td><?php echo $Apellido; ?></td>
	<td><?php echo $Cedula; ?></td>
	<td><?php echo $Direccion; ?></td>
	<td><?php echo $Telefono; ?></td>
  <?php
}
  ?>
</table>
</body>
</html>