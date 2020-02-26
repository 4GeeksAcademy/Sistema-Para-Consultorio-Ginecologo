<?php

include('../conexion.php');
$idpaciente=$_REQUEST['idpaciente'];
$fecha=$_POST['fecha'];
$hora=$_POST['hora'];
$escolaridad=$_POST['escolaridad'];
$religion=$_POST['religion'];
$responsable=$_POST['responsable'];
$parentesco=$_POST['parentesco'];
$Afamiliares=$_POST['AntecedentesHeredofamiliares'];
$APersonalesnoPatologicos=$_POST['AntecedentesPersonalesnoPatologicos'];
$APersonalesPatologicos=$_POST['AntecedentesPersonalesPatologicos'];
$menarca=$_POST['menarca'];
$ritmo=$_POST['ritmo'];
$dismenorrea=$_POST['dismenorrea'];
$toallasDia=$_POST['toallasDia'];
$normales=$_POST['normales'];
$parejasSexuales=$_POST['parejasSexuales'];
$mpf=$_POST['mpf'];
$tiempoDeUso=$_POST['tiempoDeUso'];
$docma=$_POST['docma'];
$gesta=$_POST['gesta'];
$para=$_POST['para'];
$aborto=$_POST['aborto'];
$legrado=$_POST['legrado'];
$ameu=$_POST['ameu'];
$cesaria=$_POST['cesaria'];
$indicacion=$_POST['indicacion'];
$edadPrimerEmbarazo=$_POST['edadPrimerEmbarazo'];
$FechaUltimoParto=$_POST['FechaUltimoParto'];
$FechaUltimoAborto=$_POST['FechaUltimoAborto'];
$FechaUltimaCesaria=$_POST['FechaUltimaCesaria'];
$indicacion2=$_POST['indicacion2'];
$peso=$_POST['peso'];
$productos=$_POST['productos'];
$malformaciones=$_POST['malformaciones'];
$describir=$_POST['describir'];
$embarazoActual=$_POST['embarazoActual'];
$padecimientoActual=$_POST['padecimientoActual'];
$peso2=$_POST['peso2'];
$T=$_POST['T'];
$TA=$_POST['TA'];
$FC=$_POST['FC'];
$FR=$_POST['FR'];
$TEM=$_POST['TEM'];
$cabezaCuello=$_POST['cabezaCuello'];
$cardiorespiratorio=$_POST['cardiorespiratorio'];
$glandulas=$_POST['glandulas'];
$abdomen=$_POST['abdomen'];
$FU=$_POST['FU'];
$S=$_POST['S'];
$P=$_POST['P'];
$D=$_POST['D'];
$LIB=$_POST['LIB'];
$tactoVaginal=$_POST['tactoVaginal'];
$dilatacion=$_POST['dilatacion'];
$variedadPosicion=$_POST['variedadPosicion'];
$especulcopia=$_POST['especuloscopia'];
$membranasIntegras=$_POST['membranasIntegras'];
$fechahora=$_POST['fechahora'];
$caracteristicasLiquido=$_POST['caracteristicasLiquido'];
$exploracionGinecologica=$_POST['exploracionGinecologica'];
$pelvis=$_POST['pelvis'];
$edema=$_POST['edema'];
$hiperrflexia=$_POST['hiperrflexia'];
$llenadoCapilar=$_POST['llenadoCapilar'];
$paraclinicos=$_POST['paraclinicos'];
$diagnosticos=$_POST['diagnosticos'];
$analisis=$_POST['analisis'];
$plan=$_POST['plan'];
$pronostico=$_POST['pronostico'];


$query="UPDATE tb_historias_clinicas SET `historiaC_fecha`='$fecha',`historiaC_hora`='$hora',`historiaC_escolaridad`='$escolaridad',`historiaC_religion`='$religion',`historiaC_responsable_legal`='$responsable',`historiaC_parentesco`='$parentesco', `historiaC_antecedente_heredofamiliar`='$Afamiliares',`historiaC_antecedente_personal_no_patologico`='$APersonalesnoPatologicos',`historiaC_antecedente_personal_patologico`='$APersonalesPatologicos',`historiaC_menarca`='$menarca',`historiaC_ritmo`='$ritmo',`historiaC_dismenorrea`='$dismenorrea',`historiaC_toallas_dia`='$toallasDia',`historiaC_normales`='$normales',`historiaC_parejas_sexuales`='$parejasSexuales',`historiaC_mpf`='$mpf',`historiaC_tiempo_de_uso`='$tiempoDeUso',`historiaC_docma`='$docma',`historiaC_gesta`='$gesta',`historiaC_para`='$para',`historiaC_aborto`='$aborto',`historiaC_legrado`='$legrado',`historiaC_ameu`='$ameu',`historiaC_cesaria`='$cesaria',`historiaC_indicacion`='$indicacion',`historiaC_edad_primer_embarazo`='$edadPrimerEmbarazo',`historiaC_fecha_ultimo_parto`='$FechaUltimoParto',`historiaC_fecha_ultimo_aborto`='$FechaUltimoAborto',`historiaC_fecha_ultima_cesaria`='$FechaUltimaCesaria',`historiaC_indicacion2`='$indicacion2',`historiaC_peso`='$peso',`historiaC_productos`='$productos',`historiaC_malformaciones`='$malformaciones',`historiaC_describir`='$describir',`historiaC_embarazo_actual`='$embarazoActual',`historiaC_padecimiento_actual`='$padecimientoActual',`historiaC_peso_exploracion_fisica`='$peso2',`historiaC_T`='$T',`historiaC_TA`='$TA',`historiaC_FC`='$FC',`historiaC_FR`='$FR',`historiaC_TEM`='$TEM',`historiaC_cabeza_cuello`='$cabezaCuello',`historiaC_cardiorespiratorio`='$cardiorespiratorio',`historiaC_glandulas`='$glandulas',`historiaC_abdomen`='$abdomen',`historiaC_FU`='$FU',`historiaC_S`='$S',`historiaC_P`='$P',`historiaC_D`='$D',`historiaC_LIB_ABO_ENC`='$LIB',`historiaC_tacto_vaginal`='$tactoVaginal',`historiaC_dilatacion`='$dilatacion',`historiaC_variedad_de_posicion`='$variedadPosicion',`historiaC_especuloscopia`='$especulcopia',`historiaC_menbranas_integras`='$membranasIntegras',`historiaC_fecha_hora`='$fechahora',`historiaC_caracteristicas_de_liquido`='$caracteristicasLiquido',`historiaC_exploracion_ginecologica`='$exploracionGinecologica',`historiaC_pelvis`='$pelvis',`historiaC_edema`='$edema',`historiaC_hiperrflexia`='$hiperrflexia',`historiaC_llenado_capilar`='$llenadoCapilar',`historiaC_paraclinicos`='$paraclinicos',`historiaC_diagnosticos`='$diagnosticos',`historiaC_analisis`='$analisis',`historiaC_plan`='$plan',`historiaC_pronostico`='$pronostico' WHERE paciente_id='$idpaciente'";


 

$resultados=$conexion->query($query);

if($resultados){
  header('Location: ../index.php');
}
else{
  echo "Insercion no exitosa";
}
?>