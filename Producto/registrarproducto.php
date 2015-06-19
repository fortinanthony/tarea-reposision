<!DOCTYPE html>
<html>
	<head>
		<meta charset=UTF-8>
		<title>Productos</title>
		<link rel="shortcut icon" type='image/x-icon' href='img/favicon.ico'/>
		<link href="Css/usuario.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="jquery.js"> </script>
 <script>
       function soloLetras(e){
         key = e.keyCode || e.which;
         tecla = String.fromCharCode(key).toLowerCase();
         letras = " áéíóúabcdefghijklmnñopqrstuvwxyz";
         especiales = "8-37-39-46";
         tecla_especial = false
            for(var i in especiales){
            if(key == especiales[i]){
   tecla_especial = true;
  break;
  }
}
if(letras.indexOf(tecla)==-1 && !tecla_especial){
    return false;
  }
}
</script>


<script>
     function soloNumeros(e){
          var key = window.Event ? e.which : e.keyCode
           return (key >= 48 && key <= 57)
   }
</script>


	</head>
	<body>
    <div id="unico">
    	<div class="row text-center" id=header-index style="text-align: center;">
    		<img src="Img/tecnologia.jpg" id=logo-index style="width: 800px; height:200px; padding-top: 20px; padding-bottom: 20px;" alt=""/>
    		<div class=producto>
    		</div>
    	</div>
    	<div class="text-center titulo-index" style="text-align: center;">
      ¡Tecnologia!
    	</div><br><br>
      
     <CENTER> 
      <div id="centro">
            <h2>Registrar Producto</h2>
            <form id="miformulario" method="post" class="formulario" action="manejadorproducto.php?accion=save">
              <table>
                <tr>
                  <td>
                    Nombre:
                  </td>
                  <td>
                    <input type="text" name="nombre" required onkeypress="return soloLetras(event)">
                  </td>
                </tr>
                <tr>
                  <td>
                    Codigo:
                  </td>
                  <td>
                    <input type="text" name="codigo" required onKeyPress="return soloNumeros(event)" required pattern="[0-9]{5}[0-9]{1}" maxlength="6" title="Solo puede contener 6 digitos">
                  </td>
                </tr>
                <tr>
                  <td>
                    Categoria:
                  </td>
                  <td>
                    <input type="text" name="categoria" onkeypress="return soloLetras(event)">
                  </td>
                </tr>
                <tr>
                  <td>
                    Precio:
                  </td>
                  <td>
                   $<input type="text" name="precio" onKeyPress="return soloNumeros(event)">
                  </td>
                </tr>
                <tr>
                  <td> 
                  </td>
                  <td>
                  <input class="button" type="submit" value="Guardar" name="Entrar">
                </td>
                </tr>
              </table>   
            </form>
      </div></CENTER>
    </div>          
  </body>
</html>
