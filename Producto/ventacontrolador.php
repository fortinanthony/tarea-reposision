<?php

include './Class/venta.php';
class ventacontrolador extends venta{
	public function guardarDatos($con,$objventa) {
		$variableSql = "INSERT INTO  venta "; 
		$variableSql .= "(idventa,nombre,codigo,cantidad,total,fecha)";
		$variableSql .= "VALUES(";
		$variableSql .= "'".$objventa[0]."',";
		$variableSql .= "'".$objventa[1]."',";
		$variableSql .= "'".$objventa[2]."',";
		$variableSql .= "'".$objventa[3]."',";
        $variableSql .= "'".$objventa[4]."',";
        $variableSql .= "'".$objventa[5]."');";
var_dump($variableSql);
		return consultaA($con,$variableSql);
	}

	public function modificarDatos($con,$objventa){
		$variableSql = "UPDATE venta SET ";
		$variableSql .="nombre = '".$objventa[1]."'";
		$variableSql .=" ,codigo = '".$objventa[2]."'";
		$variableSql .=" ,cantidad = '".$objventa[3]."'";
		$variableSql .=" ,total = '".$objventa[4]."'";
		$variableSql .=" ,fecha = '".$objventa[5]."'";
		$variableSql .= " WHERE idventa = ".$objventa[0].";";
		return consultaA($con,$variableSql);

		}
}
?>
