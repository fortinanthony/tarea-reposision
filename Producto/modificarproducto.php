<html>
	<head>
		<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="./libs/bootstrap/css/bootstrap.css">
	<script src="./libs/jquery-2.1.0.js"></script>
	<link rel="stylesheet" href="./libs/jquery-ui/css/smoothness/jquery-ui-1.10.4.custom.min.css">
	<script src="./libs/validacion/jquery.validate.min.js"></script>
	<script src="./libs/validacion/messages.js"></script>
	<script src="./libs/jquery-ui/js/jquery-ui-1.10.4.custom.js"></script>
	<head>
	<body>
<?php
include './coneccion.php';
include './productoControlador.php';
$producto = new productoControlador();

if(isset($_REQUEST['bot'])){
		$producto->setId($_REQUEST['id']);
		$producto->setnombre($_REQUEST['nombre']);
		$producto->setcodigo($_REQUEST['codigo']);
		$producto->setcategoria($_REQUEST['categoria']);
		$producto->setprecio($_REQUEST['precio']);
		$datosObj=array($producto->getId(),
						$producto->getnombre(),
						$producto->getcodigo(),
						$producto->getcategoria(),
						$producto->getprecio());	
			print "<div id='dialogo' title='Exito' style='display': none;'>";
			print '<p>Mensaje: ';
			print $producto->modificarDatos($con,$datosObj);
			print '<span class="badge glyphicon glyphicon-ok"></span></p>';
			print '<a href=\'manejadorproducto.php?accion=con\'>Ver datos</a>';
			print "</div>";
}
?>
<script >
	$(document).ready(function(){
		$("#dialogo").dialog();
	});
</script>
</body>
</html>