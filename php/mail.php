<?php 
	$nombre = $_POST['nombre'];
	$asunto = $_POST['asunto'];
	$mensaje = $_POST['mensaje'];

	//echo $nombre. "ha dicho <br/>".$mensaje;
	if(mail('consultas@jsoft.com.ar', $asunto, $mensaje)){
		header("Location: ../thanks.html");
	}else{
		echo "ocurrio un  error";
	}
 ?>