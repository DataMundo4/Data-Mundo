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
<title>Tabla Arriendos</title>
</head>
<body>
<table width="100%" border="1" cellspacing="0" cellpadding="0">
  <tr>
    <td colspan="4" bgcolor="skyblue"><CENTER><strong>REPORTE DE LA TABLA ARRIENDOS EN TXT</strong></CENTER></td>
  </tr>
  <tr bgcolor="red">
    <td><strong>Numeropuesto</strong></td>
    <td><strong>Fechainicio</strong></td>
    <td><strong>Fechafin</strong></td>
    <td><strong>Costoarriendo</strong></td>
  </tr>
  
<?PHP
		
$sql=mysql_query("select * from arriendos");
while($res=mysql_fetch_array($sql)){		

	$Numeropuesto=$res["Numeropuesto"];
	$Fechainicio=$res["Fechainicio"];
	$Fechafin=$res["Fechafin"];;
	$Costoarriendo=$res["Costoarriendo"];

?>  
 <tr>
	<td><?php echo $Numeropuesto; ?></td>
	<td><?php echo $Fechainicio; ?></td>
	<td><?php echo $Fechafin; ?></td>
	<td><?php echo $Costoarriendo; ?></td>           
 </tr> 
  <?php
}
  ?>
</table>
</body>
</html>