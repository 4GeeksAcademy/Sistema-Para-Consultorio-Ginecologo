<?php

include('../conexion.php');
$nombre=$_POST['nombre'];
$edad=$_POST['edad'];
$hb=$_POST['hb'];
$telefono=$_POST['telefono'];
$direccion=$_POST['direccion'];
$cp=$_POST['cp'];
$estadoC=$_POST['estadoC'];
$ocupacion=$_POST['ocupacion'];


$query="INSERT INTO tbpacientes VALUES (NULL,'$nombre','$edad','$hb','$telefono','$direccion','$cp','$estadoC','$ocupacion');";
$resultados=$conexion->query($query);//se agrega paciente y se crean tambien colposcopia perinatal e historia clinica
if($resultados){
	$query="SELECT MAX(paciente_id) AS id FROM tbpacientes";
    $resultados = mysqli_query($conexion,$query);
    $row = mysqli_fetch_array($resultados);
    $idpaciente=$row["id"];

    $query="INSERT INTO  tbcolposcopias (`colposcopia_id`, `paciente_id`) VALUES (NULL,$idpaciente)";
	$resultados=$conexion->query($query);
	$query="INSERT INTO  tbperinatal (`perinatal_id`, `paciente_id`) VALUES (NULL,$idpaciente)";
	$resultados=$conexion->query($query);
	$query="INSERT INTO  tb_historias_clinicas (`historiaC_id`, `paciente_id`) VALUES (NULL,$idpaciente)";
	$resultados=$conexion->query($query);
	if($resultados){
    header('Location: ../index.php');
    }
    else{
    echo "Insercion no exitosa";
    }
 
}
else{
  echo "Insercion de paciente no exitosa";
}
?>