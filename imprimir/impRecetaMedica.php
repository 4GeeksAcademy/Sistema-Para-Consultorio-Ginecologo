<?php

include_once('tbs_class.php');
include_once('tbs_plugin_opentbs.php');
include('../conexion.php');

$paciente_id=$_REQUEST['idpaciente'];
$receta_medica_id=$_REQUEST['idRecetaMedica'];
 $query= "SELECT * FROM tbpacientes INNER JOIN tbrecetas_medicas ON tbpacientes.paciente_id=tbrecetas_medicas.paciente_id WHERE tbpacientes.paciente_id=".$paciente_id." AND tbrecetas_medicas.receta_medica_id=".$receta_medica_id;
$resultados= $conexion->query($query);
$row=$resultados->fetch_assoc(); 

          $TBS = new clsTinyButStrong;
          $TBS->Plugin(TBS_INSTALL, OPENTBS_PLUGIN);
          $TBS->LoadTemplate('PlantillaRecetaMedica.docx');
          $TBS->LoadTemplate('PlantillaRecetaMedica.docx', OPENTBS_ALREADY_UTF8);
          $TBS->Show(OPENTBS_DOWNLOAD,'Untitsqwled 2.docx');

?>