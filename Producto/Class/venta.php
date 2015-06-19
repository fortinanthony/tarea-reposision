<?php
class venta{
	
	private $Id;
	private $nombre;
	private $codigo;
	private $cantidad;
	private $total;
	private $fecha;

public function setId($Id) {
	$this->Id = $Id;
}
public function getId() {
	return $this->Id;
}
public function setnombre($nombre) {
	$this->nombre = $nombre;
}
public function getnombre() {
	return $this->nombre;
}
public function setcodigo($codigo) {
	$this->codigo = $codigo;
}
public function getcodigo() {
	return $this->codigo;
}
public function setcantidad($cantidad) {
	$this->cantidad = $cantidad;
}
public function getcantidad() {
	return $this->cantidad;
}
public function settotal($total) {
	$this->total = $total;
}
public function gettotal() {
	return $this->total;
}
public function setfecha($fecha) {
	$this->fecha = $fecha;
}
public function getfecha() {
	return $this->fecha;
}


}

