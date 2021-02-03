<?php
//if(isset($_GET["idComunidad"])){
	$conexion =  new mysqli("localhost", "papi", "papi", "autonomas");

	if ($conexion->connect_errno) {
  		echo "Fallo " . $conexion->connect_errno . " al conectar a MySQL";
	}
	else{
    	$sql = "SELECT * FROM provincias WHERE idAutonomia=". $_POST["idComunidad"];
    	$resultado = $conexion->query($sql);
		header('Content-type: text/xml');
		/*header('Pragma: public');
		header('Cache-control: private');
		header('Expires: -1');
		echo "<?xml version=\"1.0\" encoding=\"utf-8\"?>";*/
		echo '<xml>';
		echo("<provincias>");
  		while ($provincia = $resultado->fetch_assoc()) {
			echo("<provincia id='" . $provincia["idProvincia"] . "'>" . $provincia['Nombre'] . "</provincia>\n");
  		}
		echo("</provincias>");
		echo '</xml>';
		$resultado->close();
	}
	$conexion->close();
//}
exit();
?>