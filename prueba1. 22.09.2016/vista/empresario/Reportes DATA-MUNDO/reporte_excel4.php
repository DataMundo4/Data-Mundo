<?php

header("Content-type: application/vnd.ms-excel");
header("Content-Disposition: attachment; filename=Reporte_Personal_usuarios.xls");


		$conexion=mysql_connect("localhost","root","");
		mysql_select_db("empresario",$conexion);		


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>LISTA DE CONTRATOS</title>
</head>
<body>
<table width="100%" border="1" cellspacing="0" cellpadding="0">
  <tr>
    <td colspan="6" bgcolor="skyblue"><CENTER><strong>REPORTE DE LA TABLA CONTRATOS</strong></CENTER></td>
  </tr>
  <tr bgcolor="red"  colspan="14">
    <td><strong>ID</strong></td>
    <td><strong>Nombre</strong></td>
    <td><strong>Apellido	</strong></td>
    <td><strong>Cedula</strong></td>
    <td><strong>Direccion</strong></td>
    <td><strong>Telefono</strong></td>
  </tr>
  
<?PHP
		
$sql=mysql_query("select * from contratos ");
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
 </tr> 

  <?php
}
  ?>
</table>
</body>
</html>