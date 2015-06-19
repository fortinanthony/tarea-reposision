<?php
include './coneccion.php';
include './ventacontrolador.php';

@$codigo=$_POST['codigo'];


@$cantidad=$_REQUEST['cantidad'];
@$precio=$_REQUEST['precio'];	
@$total=$cantidad*$precio;
$venta = new ventacontrolador();
 echo $accion = $_REQUEST['accion'] ;
switch ($accion) {

	case 'save':
	
 		
 		if(isset($_REQUEST['Entrar'])){
 				$venta->setId('NULL');
 				$venta->setnombre($_REQUEST['nombre']);
 				$venta->setcodigo($_REQUEST['codigo']);
 				$venta->setcantidad($_REQUEST['cantidad']);
 				$venta->settotal($total);
 				$venta->setfecha($_REQUEST['fecha']);
				
				$datosObj=array($venta->getId(),
 								$venta->getnombre(),
 								$venta->getcodigo(),
								$venta->getcantidad(),
                                $venta->gettotal(),
                                $venta->getfecha());

			print $venta->guardarDatos($con,$datosObj);
			print '<a href=\'manejadorventa.php?accion=con\'>Verdatos</a>';
		}else{
				print'no se han enviado datos';
				}
			
		break;
	case 'con':
		$sql = 'SELECT * FROM venta ORDER BY cantidad DESC';
		$datoss= consultaD($con,$sql);
		print imprimetabla1($datoss,"venta","table table-bordered",1);
		break;

	default:
		print " no hay que realizar";
		break;
     
     }

?>
</body>
</html>