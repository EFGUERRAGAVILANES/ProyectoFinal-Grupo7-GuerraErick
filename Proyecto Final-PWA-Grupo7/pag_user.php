<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
     <title>VaidrollTeamLogin7</title>
     <link rel="stylesheet" href="vaidroll.css">	
</head>
<body>

  <div class="container" >
     <form method="post" action="" class="formulario">
          <h2 class="titulo">Registrar</h2>
          <?php 
          
          ?>
          <div class="padre">
               <div class="nombre">
                    <label for="">Nombre</label>
                    <input type="text" name="nombre">
               </div>
               <div class="apellido">
                    <label for="">Apellido</label>
                    <input type="text" name="apellido">
               </div>
               <div class="motivo">
                    <label for="">Pedido</label>
                    <input type="text" name="motivo">
               </div>
               <div class="area">
               <label for="">Forma de pago</label>
                    <select name="area">
                         <option value="0" style="display:none;"><label>Seleccionar</label></option>
                         <option value="tar">Tarjeta</option>
                         <option value="trans">Transferencia</option>
                         <option value="efec">Efectivo</option>
                    </select>
               </div>
               </div>
               <div>
                    <input class= "buton" type="submit" value="Registrar" name="registro">
                    <a href="index.html">Salir</a>
               </div>
          </div>
      </form>     
     </div>   
</body>
</html>