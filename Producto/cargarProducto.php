<?php
 include 'coneccion.php';
			//print '<select name="Municipio" size="1"   >';
			//		print"<option value=";
			//			print">";
			//			print "</option>";
		
					$sql='SELECT idproducto,nombre,codigo,categoria,precio FROM producto where Codigo='.$_GET["id"] ;
					$datos=consultaD($con,$sql);
					foreach ($datos as $value) {

						//print "<option value='";
						//print $value['idproducto'];
						//print"'>";
						//print utf8_encode($value['nombre']);
						//print"</option>";
					}
					
			//	print "</select>";
			///	print"</div>";

				echo "<label>Nombre</label><input class=\"required form-control\" name='nombre' type='text' value='".$value['nombre']."'>";

		
      echo "<label>Precio</label><input name='precio' class=\"required form-control\" id=\"pisto\" onKeyPress=\"return SoloNumerosDecimales3(event, '0.0', 4, 2);\" required type='text' value='".$value['precio']."'>";
      
				
 echo "<label> Cantidad</label><input type=\"text\" onkeyup=\"multiplicar()\" id=\"calidad\" name=\"cantidad\" class=\"required form-control\" onKeyPress=\"return soloNumeros(event)\" required>
";

?>