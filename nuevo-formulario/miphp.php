<?php 
$Nombre = isset($_POST["nombre"]) ? $_POST["nombre"] : '';
$Correo = isset($_POST["correo"]) ? $_POST["correo"] : '';
$Edad = isset($_POST["edad"]) ?  $_POST["edad"] : '';
$Sexo = isset($_POST["sexo"]) ? $_POST["sexo"] : '';
$Color = isset($_POST["color-favorto"]) ? $_POST["color-favorto"] : '';
$Terminos = isset($_POST["terminos"]) ?  $_POST["terminos"] : 0;
$Alcalde = isset($_POST["alcaldes"]) ? $_POST["alcaldes"] : '';

echo  $Nombre."<br>";
echo  $Correo."<br>";
echo  $Edad."<br>";
echo  $Sexo."<br>";
echo  $Color."<br>";
echo  $Alcalde."<br>";

if($Terminos == 1){
	echo "Tu aceptaste los terminos";

}







 ?>