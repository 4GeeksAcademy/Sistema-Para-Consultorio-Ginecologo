<?php

include('../conexion.php');

$idpaciente=$_REQUEST['idpaciente'];
$idRecetaMedica=$_REQUEST['idRecetaMedica'];

$query="DELETE FROM tbrecetas_medicas WHERE receta_medica_id='$idRecetaMedica'";

$resultados=$conexion->query($query);

if($resultados){
  header('Location: ../tbRecetasMedicas.php?idpaciente='.$idpaciente);
}
else{
  echo "Insercion no exitosa";
}
?>
