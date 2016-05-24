<?php include('valida_acceso.php')?>
<!doctype html>
<html lang=''>
<head>
   <meta charset='utf-8'>
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="css/styles.css">
   <script src="js/jquery-latest.min.js" type="text/javascript"></script>
   <title>Agregar</title>
   
   
</head>
<body>
<?php 
include('menu.php');
?>
AGREGAR<br>
<br>
Id Producto:<br>
        <input type="text" name="agregaproducto" id="agregaproducto"><br>
Nombre:<br>
        <input type="text" name="nombreproducto" id="nombreproducto"><br>        
Total USD:<br>
        <input type="text" name="totalusd" id="totalusd"><br>        
Año:<br>
        <input type="text" name="ano" id="ano"><br>
<br>        
<input type="button" name="enviar" value ="Enviar" onclick="agregar()">        
</body>
</html>

