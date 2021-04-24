<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Documento sin t&iacute;tulo</title><style type="text/css">
<!--
body {
	background-image: url(imagenes/bg49.jpg);
}
-->
</style></head>

<body>
<?
include"conectar.php";
$cedula=$HTTP_POST_VARS[cedula];
$nombre=$HTTP_POST_VARS[nombre];
$apellido=$HTTP_POST_VARS[apellido];
$direccion=$HTTP_POST_VARS[direccion];
$telefono=$HTTP_POST_VARS[telefono];
$monto=$HTTP_POST_VARS[monto];
$peticion=$HTTP_POST_VARS[peticion];


$fecha=date("d/m/y");
$fecha=(substr($fecha, -2)+2000).substr($fecha,3,2).substr($fecha,0,2);
$hora=date("h:i:s");

mysql_query ("INSERT INTO radiomaraton(cedula,nombre,apellido,direccion,telefono,monto,peticion,fecha,hora) values ('$cedula','$nombre','$apellido','$direccion','$telefono','$monto','$peticion','$fecha','$hora')",$conexion);

echo"<script>
alert('Sus datos fueron enviados satisfactoriamente')
location.href='index1.html'; 
</script>";

?>
</body>
</html>
