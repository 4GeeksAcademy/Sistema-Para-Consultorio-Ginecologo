<?php

include('../conexion.php');
$paciente_id=$_REQUEST['idpaciente'];
$recetaMedica_id=$_REQUEST['idRecetaMedica']; 
$fecha=$_POST['fecha'];
$indicaciones=$_POST['indicaciones'];


$query="UPDATE tbrecetas_medicas SET receta_medica_fecha='$fecha' , receta_medica_indicaciones='$indicaciones' WHERE receta_medica_id='$recetaMedica_id'";

$resultados=$conexion->query($query);

if($resultados){
   header('Location: ../tbRecetasMedicas.php?idpaciente='.$paciente_id);
}
else{
  echo "Insercion no exitosa";
}
?>