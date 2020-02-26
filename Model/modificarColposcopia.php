<?php

include('../conexion.php');
$idpaciente=$_REQUEST['idpaciente'];
$fecha=$_POST['fecha'];
$peso=$_POST['peso'];
$talla=$_POST['talla'];
$TA=$_POST['TA'];
$tabaquismo=$_POST['tabaquismo'];
$ahf=$_POST['ahf'];
$ago=$_POST['ago'];
$menarca=$_POST['menarca'];
$ritmo=$_POST['ritmo'];
$ivsa=$_POST['ivsa'];
$ps=$_POST['ps'];
$totalPAP=$_POST['totalPAP'];
$fupap=$_POST['fupap'];
$mpf=$_POST['mpf'];
$gesta=$_POST['gesta'];
$para=$_POST['para'];
$cesaria=$_POST['cesaria'];
$aborto=$_POST['aborto'];
$lui=$_POST['lui'];
$app=$_POST['app'];
$epe=$_POST['epe'];
$fup=$_POST['fup'];
$fur=$_POST['fur'];
$its=$_POST['its'];
$txPrevio=$_POST['txPrevio'];
$sintomasTGI=$_POST['sintomasTGI'];
$colposcopia=$_POST['colposcopia'];
$indiceReid=$_POST['indiceReid'];
$nivelCampion=$_POST['nivelCampion'];
$extensionLineal=$_POST['extensionLineal'];
$vaginaSana=$_POST['VaginaSana'];
$VulvaSana=$_POST['VulvaSana'];
$PerianalSana=$_POST['PerianalSana'];
$impresionColposcopica=$_POST['impresionColposcopica'];
$observaciones=$_POST['observaciones'];

 

$query="UPDATE tbcolposcopias SET `colposcopia_fecha`='$fecha', `colposcopia_peso`='$peso',`colposcopia_talla`='$talla',`colposcopia_TA`='$TA',`colposcopia_tabaquismo`='$tabaquismo', `colposcopia_AHF`='$ahf',`colposcopia_AGO`='$ago',`colposcopia_menarca`='$menarca',`colposcopia_ritmo`='$ritmo',`colposcopia_IVSA`='$ivsa',`colposcopia_PS`='$ps',`colposcopia_total_PAP`='$totalPAP',`colposcopia_FUPAP`='$fupap',`colposcopia_MPF`='$mpf',`colposcopia_gesta`='$gesta',`colposcopia_para`='$para',`colposcopia_cesaria`='$cesaria',`colposcopia_aborto`='$aborto',`colposcopia_LUI`='$lui',`colposcopia_APP`='$app',`colposcopia_EPE`='$epe',`colposcopia_FUP`='$fup',`colposcopia_FUR`='$fur',`colposcopia_ITS`='$its',`colposcopia_tx_previo`='$txPrevio',`colposcopia_sintomas_del_TGI`='$sintomasTGI',`colposcopia_colposcopia`='$colposcopia',`colposcopia_indice_reid`='$indiceReid',`colposcopia_nivel_campion`='$nivelCampion',`colposcopia_extension_lineal`='$extensionLineal',`colposcopia_vagina_sana`='$vaginaSana',`colposcopia_vulva_sana`='$VulvaSana',`colposcopia_region_perianal_sana`='$PerianalSana',`colposcopia_impresion_colposcopica`='$impresionColposcopica',`colposcopia_observaciones`='$observaciones' WHERE paciente_id='$idpaciente'";
 

$resultados=$conexion->query($query);
if($resultados){
  header('Location: ../index.php');
}
else{
  echo "Eliminacion no exitosa";
}
 
?>