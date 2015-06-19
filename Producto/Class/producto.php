<?php
class producto{
	
	private $Id;
	private $nombre;
	private $codigo;
	private $categoria;
	private $precio;

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
public function setcategoria($categoria) {
	$this->categoria = $categoria;
}
public function getcategoria() {
	return $this->categoria;
}
public function setprecio($precio) {
	$this->precio = $precio;
}
public function getprecio() {
	return $this->precio;
}

}


?>