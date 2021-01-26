<?php
//if(isset($_GET["idComunidad"])){
	$conexion =  new mysqli("localhost", "papi", "papi", "autonomas");

	if ($conexion->connect_errno) {
  		echo "Fallo " . $conexion->connect_errno . " al conectar a MySQL";
	}
	else{
    	$sql = "SELECT * FROM autonomias";
    	$resultado = $conexion->query($sql);
		header('Content-type: text/xml');
		/*header('Pragma: public');
		header('Cache-control: private');
		header('Expires: -1');
		echo "<?xml version=\"1.0\" encoding=\"utf-8\"?>";*/
		echo '<xml>';
		echo("<autonomias>");
  		while ($autonomia = $resultado->fetch_assoc()) {
			echo("<autonomia id='" . $autonomia["idAutonomia"] . "'>" . $autonomia['Nombre'] . "</autonomia>\n");
  		}
		echo("</autonomias>");
		echo '</xml>';
		$resultado->close();
	}
	$conexion->close();
//}
exit();
?>