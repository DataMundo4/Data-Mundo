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
<title>LISTA DE CATALOGOS</title>
</head>
<body>
<table width="676%" height="622" border="1" cellpadding="0" cellspacing="1">
  <tr>
    <td colspan="8" bgcolor="skyblue"><CENTER><strong>REPORTE DE LA TABLA CATALOGOS EN WORD</strong></CENTER></td>
  </tr>
  <tr bgcolor="red">
    <td width="2%"><strong>ID</strong></td>
    <td width="6%"><strong>Costo</strong></td>
    <td width="7%"><strong>Descripcion	</strong></td>
    <td width="7%"><strong>Ubicacion</strong></td>
    <td width="8%"><strong>Piso</strong></td>
    <td width="11%"><strong>Area</strong></td>

    <td width="8%"><strong>Estrato</strong></td>
    <td width="11%"><strong>Sector</strong></td>
  </tr>
  
<?PHP
		
$sql=mysql_query("select * from catalogos");
while($res=mysql_fetch_array($sql)){		

	$ID=$res["ID_CAT"];
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
	
  <?php
}
  ?>
</table>
</body>
</html>