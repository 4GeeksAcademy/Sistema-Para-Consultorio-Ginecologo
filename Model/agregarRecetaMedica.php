<?php
include('../conexion.php');

$paciente_id=$_REQUEST['idpaciente'];  
$fecha=$_POST['fecha'];
$indicaciones=$_POST['indicaciones'];
$query="INSERT INTO tbrecetas_medicas VALUES (NULL,'$paciente_id','$fecha','$indicaciones')";
$resultados=$conexion->query($query);

if($resultados){
	$query="SELECT MAX(receta_medica_id) AS id FROM tbrecetas_medicas";
    $resultados = mysqli_query($conexion,$query);
    $row = mysqli_fetch_array($resultados);
	$receta_medica_id=$row["id"];	
	header('Location: ../imprimir/impRecetaMedica.php?idpaciente='.$paciente_id.'&idRecetaMedica='.$receta_medica_id);
}
else{
  echo "Insercion no exitosa";
}
?>