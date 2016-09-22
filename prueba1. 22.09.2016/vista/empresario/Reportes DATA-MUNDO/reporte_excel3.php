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
<title>LISTA DE USUARIOS</title>
</head>
<body>
<table width="100%" border="1" cellspacing="0" cellpadding="0">
  <tr>
    <td colspan="8" bgcolor="skyblue"><CENTER><strong>REPORTE DE LA TABLA CATALOGOS EN EXEL</strong></CENTER></td>
  </tr>
  <tr bgcolor="red"  colspan="14">
    <td><strong>ID CAT</strong></td>
    <td><strong>Costo</strong></td>
    <td><strong>Descripcion	</strong></td>
    <td><strong>Ubicacion</strong></td>
    <td><strong>Piso</strong></td>
    <td><strong>Area</strong></td>
    <td><strong>Estrato</strong></td>
    <td><strong>Sector</strong></td>
  </tr>
  
<?PHP
		
$sql=mysql_query("select * from Catalogos ");
while($res=mysql_fetch_array($sql)){		

	$ID =$res["ID_CAT"];
	$Costo=$res["Costo"];
	$Descripcion=$res["Descripcion"];
	$Ubicacion=$res["Ubicacion"];
	$Piso=$res["Piso"];
	$Area=$res["Area"];
	$Estrato=$res["Estrato"];
	$Sector=$res["Sector"];
?>  
 <tr>
	<td><?php echo $ID; ?></td>
	<td><?php echo $Costo; ?></td>
	<td><?php echo $Descripcion; ?></td>
	<td><?php echo $Ubicacion; ?></td>
	<td><?php echo $Piso; ?></td>
	<td><?php echo $Area; ?></td> 
	<td><?php echo $Estrato; ?></td>
	<td><?php echo $Sector; ?></td>         
 </tr> 

  <?php
}
  ?>
</table>
</body>
</html>