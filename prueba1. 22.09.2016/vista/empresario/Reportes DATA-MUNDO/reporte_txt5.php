<?php

header("Content-type: application/vnd.ms-word");
header("Content-Disposition: attachment; filename=Reporte_Personal_usuarios.txt");


		$conexion=mysql_connect("localhost","root","");
		mysql_select_db("empresario",$conexion);		


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>LISTA DE INMUEBLES</title>
</head>
<body>
<table width="100%" border="1" cellspacing="0" cellpadding="0">
  <tr>
    <td colspan="4" bgcolor="skyblue"><CENTER><strong>REPORTE DE LA TABLA INMUEBLES EN TXT</strong></CENTER></td>
  </tr>
  <tr bgcolor="red">
    <td><strong>ID</strong></td>
    <td><strong>Costoactual</strong></td>
    <td><strong>Direccion	</strong></td>
    <td><strong>Pisopuesto</strong></td>
  </tr>
  
<?PHP
		
$sql=mysql_query("select * from inmuebles");
while($res=mysql_fetch_array($sql)){		

	$ID=$res["ID_PUESTO"];
	$Costoactual=$res["Costoactual"];
	$Direccion=$res["Direccion"];;
	$Pisopuesto=$res["Pisopuesto"];	

?>  
 <tr>
	<td><?php echo $ID; ?></td>
	<td><?php echo $Costoactual; ?></td>
	<td><?php echo $Direccion; ?></td>
	<td><?php echo $Pisopuesto; ?></td>               
 </tr> 
  <?php
}
  ?>
</table>
</body>
</html>