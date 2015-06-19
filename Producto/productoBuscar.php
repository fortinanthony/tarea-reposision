<?php include './coneccion.php';?>
<?php 
	$sql = "SELECT * FROM producto WHERE idproducto ='".$_REQUEST['id']."';";
	$datos=consultaD($con,$sql,3);
	?>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
		<link rel="stylesheet"  href="./libs/bootstrap/css/bootstrap.css">
		<script src="./libs/jquery-2.1.0.js"></script>
		<link rel="stylesheet"  href="./libs/jquery-ui/css/smoothness/jquery-ui-1.10.4.custom.min.css">
		<script src="./libs/validacion/jquery.validate.min.js"></script>
		<script src="./libs/validacion/messages.js"></script>
		<script src="./libs/jquery-ui/js/jquery-ui-1.10.4.custom.js"></script>
	</head>
	<body>
	<div class="jumbotron">
		<form action="modificarproducto.php" method="post" id="producto">
			<table class="table-bordered">
			<div class="row">
			<div class="col-xs-2">
			Nombre:
			</div>
			<div class="col-xs-2">
				<input type="hidden" name="id" value='<?php print $datos[0][0]?>'>
				<input type="text" name="nombre" value='<?php print $datos[0][1] ?>' class="required digits form-control">
			</div>
		</div>
	<div class="row">
		<div class="col-xs-2">
			Codigo:
		</div>
		<div class="col-xs-2">
			<input type="text" name="codigo" value='<?php print $datos[0][2]?>' class="required form-control">
		</div>
	</div>
	<div class="row">
		<div class="col-xs-2">
			Categoria:
		</div>
		<div class="col-xs-2">
			<input type="text" name="categoria" value='<?php print $datos[0][3]?>' class="required form-control">
		</div>
	</div>
	<div class="row">
		<div class="col-xs-2">
			Precio:
		</div>
		<div class="col-xs-2">
		<div class="input-group">
			<input type="text" name="precio" id="producto" value='<?php print $datos[0][4]?>' class="required form-control">
			<span id="producto" class=" input-group-addon glyphicon glyphicon-calendar"></span>
		</div>
		</div>
	</div>
	   

	   <input type="submit" name="bot" value="enviar" class="btn btn-prymary">
		</div>
	</table>
	</form>
	</div>
	<script type="text/javascript">
	$().ready(function(){
		$("#alumno").validate({});
	});
	$(document).ready(
		function(){
			$("#fechac").datepicker(
				{
					changeMonth:true,
					changeYear:true,
					dateFormat:'yy-mm-dd',
					showAnim:'slide'
				}
			);
		 }

	)
	</script>
</body>
</html>
