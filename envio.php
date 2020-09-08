<?php
$codigo = $_GET["orden"];
$destinatario = $_GET["destinatario"];
$destino = $_GET["destino"];
$direccion = $_GET["direccion"];
$tienda = $_GET["tienda"];

if(strlen($codigo) == 0 || strlen($destino) == 0 || strlen($destinatario) == 0 || strlen($direccion) == 0 || strlen($tienda) == 0) {
	$msj = new stdClass();
	$msj->error = "1";
	print(json_encode($msj));
	die("Faltan datos de envio");
}

$dbconn = pg_connect("host=localhost dbname = Proyecto1CC6 user=postgres password = 12345");
if(!$dbconn) {
	$msj = new stdClass();
	$msj->error = "1";
	print(json_encode($msj));
	pg_close($dbconn);
	die("No fue posible conectarse");
}
$query = "INSERT INTO Envio VALUES ('$codigo','$destinatario','$direccion',1,'$tienda','$destino')";
$result = pg_query($query);
if(!$result) {
	$msj = new stdClass();
	$msj->error = "1";
	print(json_encode($msj));
} else {
	$msj = new stdClass();
	$msj->error = "0";
	print(json_encode($msj));
}
pg_close($dbconn); //Avisar si se pudo ingresar la orden o no?
?>
