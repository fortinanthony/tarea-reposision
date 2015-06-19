<!DOCTYPE html>
<html>
  <head>
    <meta charset=UTF-8>
    <title>Productos</title>
    <link rel="shortcut icon" type='image/x-icon' href='img/favicon.ico'/>
    <link href="Css/usuario.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="jquery.js"> </script>
 <script>
function multiplicar(){
  cantidad=document.getElementById('pisto').value;
  precio=document.getElementById('calidad').value;
    total=precio*cantidad;
    document.getElementById('total').innerHTML="<label>Total de venta "+total+"</label>";
}

   function cargarproducto(id){
    alert(id)  
$("#municipios").load('cargarproducto.php?id='+id);
     }


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
            <h2>Venta</h2>
            <li><a href="manejadorventa.php?accion=con">Ver reporte</a></li>
            <form id="miformulario" method="post" class="formulario" action="manejadorventa.php?accion=save">
              <table>
               
                <tr>
                  <td>
                    Codigo:
                  </td>
                  <td>
                    <input type="text" name="codigo" id="salu" required onKeyPress="return soloNumeros(event)" required pattern="[0-9]{5}[0-9]{1}" maxlength="6" title="Solo puede contener 6 digitos">
                 <aotput id="municipios"></aotput>
                  </td>
                </tr>
                 <tr>
                  <td>
                    Fecha:
                  </td>
                  <td>
                    <input type="text" name="fecha" value="<?php echo date ("Y"."/"."m"."/"."d")?>" required onKeyPress="return soloNumeros(event)">
                 <aotput id="municipios"></aotput>
                  </td>
                </tr>
               
                <tr>
                  <td> 
                  </td>
                  <td>
                  <output id="total">
                  </output>
                  <input class="button" type="button" value="Buscar" onclick="cargarproducto(getElementById('salu').value) ">
                  <input class="button" type="submit" value="Guardar" name="Entrar">
                </td>
                </tr>
              </table>   
            </form>
      </div></CENTER>
    </div>          
  </body>
</html>
