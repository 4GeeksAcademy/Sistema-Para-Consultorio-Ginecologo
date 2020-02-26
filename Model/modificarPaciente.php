<?php

include('../conexion.php');
$idpaciente=$_REQUEST['idpaciente'];
$nombre=$_POST['nombre'];
$edad=$_POST['edad'];
$hb=$_POST['hb'];
$telefono=$_POST['telefono'];
$direccion=$_POST['direccion'];
$cp=$_POST['cp'];
$estadoC=$_POST['estadoC'];
$ocupacion=$_POST['ocupacion'];

$query="UPDATE tbpacientes SET paciente_nombre='$nombre', paciente_edad='$edad', paciente_hb='$hb', paciente_telefono='$telefono', paciente_domicilio='$direccion', paciente_codigo_postal='$cp', paciente_estado_civil='$estadoC', paciente_ocupacion='$ocupacion' WHERE paciente_id='$idpaciente'";

$resultados=$conexion->query($query);

if($resultados){
  header('Location: ../index.php');
}
else{
  echo "Insercion no exitosa";
}
?>