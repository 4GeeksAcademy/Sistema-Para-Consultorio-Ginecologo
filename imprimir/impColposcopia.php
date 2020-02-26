<?php
include_once('tbs_class.php');
include_once('tbs_plugin_opentbs.php');
include('../Model/database.php');

$paciente_id=$_REQUEST['idpaciente'];
$query= "SELECT * FROM tbpacientes INNER JOIN tbcolposcopias ON tbpacientes.paciente_id=tbcolposcopias.paciente_id WHERE tbpacientes.paciente_id=".$paciente_id;
$pdo = Database::connect();
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$q = $pdo->prepare($query);
$q->execute(array($paciente_id));
$row = $q->fetch(PDO::FETCH_ASSOC);
Database::disconnect();

          $TBS = new clsTinyButStrong;
          $TBS->Plugin(TBS_INSTALL, OPENTBS_PLUGIN);
          $TBS->LoadTemplate('PlantillaColposcopia.docx');
          $TBS->LoadTemplate('PlantillaColposcopia.docx', OPENTBS_ALREADY_UTF8);
          $TBS->Show(OPENTBS_DOWNLOAD,'Colposcopia.docx');

?>