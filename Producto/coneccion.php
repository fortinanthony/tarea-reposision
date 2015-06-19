<?php
$dsn = 'mysql:dbname=producto;host=127.0.0.1';
$usuario = 'root';
$clave = '';

try{
	$con = new PDO($dsn,$usuario,$clave);

}catch (PDOException $e) {
	print "<div id='dialogo' title='Error Salida' style='display:none;'>";
	print '<p> Error Generado:</p>';
	print '<p><span class="label label-warning glyphicon glyphicon-remove">Codigo:</span></p>';
	print $e->getCode();
	print '<p><span class="label label-warning glyphicon glyphicon-remove">Mensaje de Error:</span></p>';
	print $e->getMessage(); 
	print "</div>";
}

function consultaA($coneccion,$sql){
	$ejecutor = $coneccion;
	$msgok = NULL;
	$msgerror = NULL;

	try{ $condicion = strstr(trim($sql)," ",TRUE);
	switch ($condicion) {
		case "INSERT":
			$msgerror= "no se ha podido insertar los datos";
			$msgok = "datos insertados";
			break;
		case "DELETE":
			$msgerror = "no se ha podido eliminar los datos";
			$msgok = "datos eliminados";
			break;
		case "UPDATE":
			$msgerror = "No se ha podido actualizar los datos";
			$msgok = " Datos actualizados";
			break;

		default:
			$msgerror = "Es posible que no use un estandar SQL";
			break;
	}

	$ejecutor->beginTransaction();
	$fila = $ejecutor->exec ($sql);
	$ejecutor->commit();


if ($fila == 0 ) {	
	$msgok = $msgerror. " no existe coincidencia para realizar la accion sobre los elementos";
return $msgok."filas afectadas ".$fila;
} 
	}catch (Exception $exc){
		$ejecutor->rollback();
		return $msgerror. ":<br>".$exc->getMessage() ;

	}

}

function consultaD($coneccion,$sql,$modo=2,$presentacion=FALSE){
	$ejecutor= $coneccion;
	$manejador = trim($sql) ;
	$devolucion = "" ;
	
	try {$datos = $ejecutor->query($manejador);
		$datos-> setFetchMode($modo) ;
		if ($presentacion==TRUE){
			$devolucion.= "<table border = 1 >";
			foreach ($datos->fetchAll() as $registros){
				$devolucion.="<tr>";
				foreach ($registros as $valor){
					$devolucion.="<td>".$valor."</td>";
				}
				$devolucion.= "</tr>";
			
			}
			$devolucion.="</table>";
				}else{
					$contenedor = $datos->fetchAll();
					$devolucion= $contenedor;
				}


	}catch (Exception $exc ) {
		return "No se pudieron consultar los datos<br />".$exc->getMessage();
	}
	return $devolucion;
}

function imprimetabla($objeto,$form,$estilo="table",$editar=0){
	if ($objeto != NULL) {
		if (is_array($objeto)) {
			$tabla = "<table class=\"$estilo\"border='1'>";
			$tabla .="<tr class'info'>";
			foreach (array_keys($objeto[0]) as $value) {
				$tabla .= "<th>";
				$tabla .= $value;
				$tabla .= "</th>";
			
			}
			if ($editar != "0") {
				$tabla .= "<td>Modificar</td><td>Eliminar</td>";
			
			}
			$tabla .= "</tr><tr>";
			foreach ($objeto as $datos) {
				foreach ($datos as $registro ) {
					$tabla .= "<td>";
					$tabla .= $registro;
					$tabla .= "</td>";
				}
				if ($editar != "0") {
					//le quitas la arroba despues....
					@$tabla .= "<td><a href=".$form."Buscar.php?id=".$datos['idproducto'].">Modificar</a></dt>";
					@$tabla .= "<td><a href=".$form."Borrar.php?id=".$datos['idproducto'].">Eliminar</a></td>";
				}
				$tabla .= "</tr>";
			}
		 $tabla .= "</table>";	
		} else {
			$tabla = "no hay regisrto que mostrar";
		}
	
	} else {
		$tabla = "Debe pasarse un arreglo como parametro";
	}
	return $tabla;
}
function imprimetabla1($objeto,$form,$estilo="table",$editar=0){
	if ($objeto != NULL) {
		if (is_array($objeto)) {
			$tabla = "<table class=\"$estilo\" border='1'> ";
			$tabla .="<tr class'info'>";
			foreach (array_keys($objeto[0]) as $value) {
				$tabla .= "<th>";
				$tabla .= $value;
				$tabla .= "</th>";
			
			}
			/*if ($editar != "0") {
				$tabla .= "<td>Modificar</td><td>Eliminar</td>";
			
			}*/
			$tabla .= "</tr><tr>";
			foreach ($objeto as $datos) {
				foreach ($datos as $registro ) {
					$tabla .= "<td>";
					$tabla .= $registro;
					$tabla .= "</td>";
				}
				/*if ($editar != "0") {
					//le quitas la arroba despues....
					@$tabla .= "<td><a href=".$form."Buscar.php?id=".$datos['idproducto'].">Modificar</a></dt>";
					@$tabla .= "<td><a href=".$form."Borrar.php?id=".$datos['idproducto'].">Eliminar</a></td>";
				}*/
				$tabla .= "</tr>";
			}
		 $tabla .= "</table>";	
		} else {
			$tabla = "no hay regisrto que mostrar";
		}
	
	} else {
		$tabla = "Debe pasarse un arreglo como parametro";
	}
	return $tabla;
}


?>