<?php

include('../conexion.php');

$idpaciente=$_REQUEST['idpaciente'];

$query="DELETE FROM tbcolposcopias WHERE paciente_id='$idpaciente'";
$resultados=$conexion->query($query);
$query="DELETE FROM tbperinatal WHERE paciente_id='$idpaciente'";
$resultados=$conexion->query($query);
$query="DELETE FROM tbrecetas_medicas WHERE paciente_id='$idpaciente'";
$resultados=$conexion->query($query);
$query="DELETE FROM tb_historias_clinicas WHERE paciente_id='$idpaciente'";
$resultados=$conexion->query($query);
$query="DELETE FROM tbpacientes WHERE paciente_id='$idpaciente'";
$resultados=$conexion->query($query);
 
if($resultados){
  header('Location: ../index.php');
}
else{
  echo "Eliminacion no exitosa";
}
?>
