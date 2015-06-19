<?php

include './Class/producto.php';
class productoControlador extends producto{
	public function guardarDatos($con,$objproducto) {
		$variableSql = "INSERT INTO  producto "; 
		$variableSql .= "(idproducto,nombre,codigo,categoria,precio)";
		$variableSql .= "VALUES(";
		$variableSql .= "'".$objproducto[0]."',";
		$variableSql .= "'".$objproducto[1]."',";
		$variableSql .= "'".$objproducto[2]."',";
		$variableSql .= "'".$objproducto[3]."',";
		$variableSql .= "'".$objproducto[4]."');";
var_dump($variableSql);
		return consultaA($con,$variableSql);
	}

	public function modificarDatos($con,$objproducto){
		$variableSql = "UPDATE producto SET ";
		$variableSql .="nombre = '".$objproducto[1]."'";
		$variableSql .=" ,codigo = '".$objproducto[2]."'";
		$variableSql .=" ,categoria = '".$objproducto[3]."'";
		$variableSql .=" ,precio = '".$objproducto[4]."'";
		$variableSql .= " WHERE idproducto = ".$objproducto[0].";";
		return consultaA($con,$variableSql);

		}
}
?>
