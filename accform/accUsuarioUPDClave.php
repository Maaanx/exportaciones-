<?php
require 'usuario.php'
include("../librerias.php");

//$newpewd=$_POST['newpwd'];
$newpewd=$_GET['newpwd'];

session_start();
if (!isset($_SESSION["oUsuario"])){
	?>
<!-- Reenvio a la p�gina principal-->
<script>
	document.location.href="index.php";
</script>
<?php 
}

$oUsr=$_SESSION["oUsuario"];
var_dump($oUsr);
if($oUsr->ActualizaClave($newpewd)) echo "clave actualizada"; else echo "ERROR";
?>



<?php
require 'Usuario.php';

session_start();
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$oUsr=  unserialize($_SESSION['oUsr']);

if ($oUsr->ModificaClave($_POST["clave"])){
    echo json_encode(true);
    return;
 }
echo json_encode(false);
?>
