<?php
include './coneccion.php';
include './productoControlador.php';

@$codigo=$_POST['codigo'];

	

$producto = new productoControlador();
 echo $accion = $_REQUEST['accion'] ;
switch ($accion) {

	case 'save':
	$conexion=mysql_connect("localhost","root")or die ('Ha fallado la conexión con el servidor: '.mysql_error());
	mysql_select_db("producto",$conexion)or die ('Error al seleccionar la Base de Datos: '.mysql_error());
//para un codigo repetido
	$nuevo_codigo=mysql_query("SELECT codigo from producto where codigo='$codigo'");
	$codigo_exist = mysql_num_rows($nuevo_codigo);


	if ($codigo_exist>0) {
		echo "<script type=\"text/javascript\">alert('Este codigo ya existe');window.location.assign('registroproducto.php');</script>";
	}else{
 		
 		if(isset($_REQUEST['Entrar'])){
 				$producto->setId('NULL');
 				$producto->setnombre($_REQUEST['nombre']);
 				$producto->setcodigo($_REQUEST['codigo']);
 				$producto->setcategoria($_REQUEST['categoria']);
 				$producto->setprecio($_REQUEST['precio']);
				
				$datosObj=array($producto->getId(),
 								$producto->getnombre(),
 								$producto->getcodigo(),
 								$producto->getcategoria(),
								$producto->getprecio());

			print $producto->guardarDatos($con,$datosObj);
			print '<a href=\'manejadorproducto.php?accion=con\'>Verdatos</a>';
		}else{
				print'no se han enviado datos';
				}
			}
		break;
	case 'con':
		$sql = 'SELECT * FROM producto';
		$datoss= consultaD($con,$sql);
		print imprimetabla($datoss,"producto","table table-bordered",1);
		break;

	default:
		print " no hay que realizar";
		break;
     
     }

?>
</body>
</html>