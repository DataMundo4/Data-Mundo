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
<title>LISTA DE USUARIOS</title>
</head>
<body>
<table width="676%" height="622" border="1" cellpadding="0" cellspacing="1">
  <tr>
    <td colspan="4" bgcolor="skyblue"><CENTER><strong>REPORTE DE LA TABLA USUARIOS EN WORD</strong></CENTER></td>
  </tr>
  <tr bgcolor="red">
    <td width="2%"><strong>Numeropuesto</strong></td>
    <td width="6%"><strong>Fechainicio</strong></td>
    <td width="7%"><strong>Fechafin	</strong></td>
    <td width="7%"><strong>Costoarriendo</strong></td>
  </tr>
  
<?PHP
		
$sql=mysql_query("select * from arriendos");
while($res=mysql_fetch_array($sql)){		

	$Numeropuesto=$res["Numeropuesto"];
	$Fechainicio=$res["Fechainicio"];
	$Fechafin=$res["Fechafin"];
	$Costoarriendo=$res["Costoarriendo"];
?>  
 <tr>
	<td><?php echo $Numeropuesto; ?></td>
	<td><?php echo $Fechainicio; ?></td>
	<td><?php echo $Fechafin; ?></td>
	<td><?php echo $Costoarriendo; ?></td>
<?php
}
  ?>
</table>
</body>
</html>