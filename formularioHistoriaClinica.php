<!DOCTYPE html>
<html lang="en">
  <head>
    
    <title>Sistema Para Consultorio Ginecólogo</title>

    <!-- vendor css -->
    <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="lib/Ionicons/css/ionicons.css" rel="stylesheet">

    <!-- Slim CSS -->
    <link rel="stylesheet" href="css/slim.css">

  </head>
  <body>
  <div class="slim-header">
    <?php include 'header.php'; ?>
    </div>

    <div class="slim-mainpanel">
      <div class="container">
        <div class="slim-pageheader">
          <ol class="breadcrumb slim-breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Historia Clinica</li>
          </ol>
          <h6 class="slim-pagetitle">Historia Clínica</h6>
        </div><!-- slim-pageheader -->
    <?php
    include("Model/database.php");
    $pdo = Database::connect();
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $paciente_id=$_REQUEST['idpaciente'];
            $query= "SELECT * FROM tbpacientes where paciente_id=?";
            $q = $pdo->prepare($query);
            $q->execute(array($paciente_id));
            $row = $q->fetch(PDO::FETCH_ASSOC);
        $query2= "SELECT * FROM tb_historias_clinicas WHERE paciente_id=?";
        $q2 = $pdo->prepare($query2);
        $q2->execute(array($paciente_id));
        $row2 = $q2->fetch(PDO::FETCH_ASSOC);
        Database::disconnect();
            ?>
   <form action="Model/modificarHistoriaClinica.php?idpaciente=<?php echo $paciente_id?>" method="POST"> 
        <div class="section-wrapper">
          <label class="section-title">FICHA DE INDENTIFICACIÓN</label>
          <div class="form-layout">
            <div class="row mg-b-25">
              <div class="col-lg-3">
                <div class="form-group">       
                  <i class="fa fa-calendar tx-16 lh-0 op-6"></i>          
                  <label class="form-control-label">Fecha: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="date" name="fecha"   value="<?php echo $row2['historiaC_fecha']; ?>">
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-3">
                <div class="form-group">
                  <i class="icon ion-clock tx-16 lh-0 op-6"></i>  
                  <label class="form-control-label">Hora: <span class="tx-danger">*</span></label>                  
                  <input class="form-control" type="time" name="hora"   value="<?php echo $row2['historiaC_hora']; ?>">
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-6">
                <div class="form-group">
                   <i class="icon ion-person tx-16 lh-0 op-6"></i>  
                  <label class="form-control-label">Nombre: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" value="<?php echo $row['paciente_nombre']; ?>"   readonly="readonly">
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-1">
                <div class="form-group">
                  <label class="form-control-label">Edad: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" value="<?php echo $row['paciente_edad']; ?>"   readonly="readonly">
                </div>
              </div><!-- col-4 -->
               <div class="col-lg-2">
                <div class="form-group">
                  <label class="form-control-label">Estado Civil: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" value="<?php echo $row['paciente_estado_civil']; ?>"   readonly="readonly" >
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-2">
                <div class="form-group">
                  <label class="form-control-label">Ocupación: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" value="<?php echo $row['paciente_ocupacion']; ?>"   readonly="readonly" >
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-2">
                <div class="form-group">
                  <label class="form-control-label">Escolaridad: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="escolaridad" value="<?php echo $row2['historiaC_escolaridad']; ?>" >
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-2">
                <div class="form-group">
                  <label class="form-control-label">Religion: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="religion"  value="<?php echo $row2['historiaC_religion']; ?>" >
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-3">
                <div class="form-group">
                  <i class="fa fa-birthday-cake tx-16 lh-0 op-6"></i> 
                  <label class="form-control-label">Fecha de Nacimiento: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" value="<?php echo $row['paciente_hb']; ?>"   readonly="readonly" >
                </div>
              </div><!-- col-4 -->
              <div class="col-md-12">
                <div class="form-group">
                  <label class="form-control-label">Domicilio: <span class="tx-danger">*</span></label>
                    <textarea rows="2" class="form-control"  readonly="readonly"> <?php echo $row['paciente_domicilio']; ?> </textarea>               
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-5">
                <div class="form-group">
                  <label class="form-control-label">Responsable Legal: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="responsable"  value="<?php echo $row2['historiaC_responsable_legal']; ?>" >
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-3">
                <div class="form-group">
                  <label class="form-control-label">Panteresco: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="parentesco"  value="<?php echo $row2['historiaC_parentesco']; ?>"  >
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-4">
                <div class="form-group">
                  <i class="fa fa-phone tx-16 lh-0 op-6"></i>
                  <label class="form-control-label">Telefono: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" value="<?php echo $row['paciente_telefono']; ?>"   readonly="readonly">
                </div>
              </div><!-- col-4 -->

              <div class="col-lg-12"> 
                <div class="form-layout">     
              <label class="section-title">ANTECEDENTES HEREDOFAMILIARES:</label>   
              <textarea rows="5" class="form-control" placeholder="Antecedentes Heredofamiliares" name="AntecedentesHeredofamiliares"  ><?php echo $row2['historiaC_antecedente_heredofamiliar']; ?></textarea>         </div><!-- col-4 -->          
              </div><!-- form-layout -->

              <div class="col-lg-12"> 
                <div class="form-layout">     
              <label class="section-title">ANTECEDENTES PERSONALES NO PATOLÓGICOS:</label>   
              <textarea rows="5" class="form-control" placeholder="Antecedentes Personales no Patológicos" name="AntecedentesPersonalesnoPatologicos"><?php echo $row2['historiaC_antecedente_personal_no_patologico']; ?></textarea>             
                 </div><!-- col-4 -->          
              </div><!-- form-layout -->

              <div class="col-lg-12"> 
                <div class="form-layout">     
              <label class="section-title">ANTECEDENTES PERSONALES PATOLÓGICOS:</label>   
              <textarea rows="5" class="form-control" placeholder="Antecedentes Personales Patológicos" name="AntecedentesPersonalesPatologicos"><?php echo $row2['historiaC_antecedente_personal_patologico']; ?></textarea>             
                 </div><!-- col-4 -->          
              </div><!-- form-layout -->

              <div class="col-lg-12">     
              <label class="section-title">ANTECEDENTES GINECO OBSTÉTRICOS:</label>               
              </div><!-- col-4 -->  
               <div class="col-lg-2">
                <div class="form-group">
                  <label class="form-control-label">Menarca: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="menarca" value="<?php echo $row2['historiaC_menarca']; ?>">
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-2">
                <div class="form-group">
                  <label class="form-control-label">Ritmo: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="ritmo"   value="<?php echo $row2['historiaC_ritmo']; ?>" >
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-2">
                <div class="form-group">
                  <label class="form-control-label">Dismenorrea: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="dismenorrea"  value="<?php echo $row2['historiaC_dismenorrea']; ?>"  >
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-2">
                <div class="form-group">
                  <label class="form-control-label">Toallas dia: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="toallasDia"  value="<?php echo $row2['historiaC_toallas_dia']; ?>"  >
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-2">
                <div class="form-group">
                  <label class="form-control-label">Normales: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="normales"  value="<?php echo $row2['historiaC_normales']; ?>"  >
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-2">
                <div class="form-group">
                  <label class="form-control-label">Parejas Sexuales: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="parejasSexuales"  value="<?php echo $row2['historiaC_parejas_sexuales']; ?>" >
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-12">
                <div class="form-group">
                  <label class="form-control-label">MPF: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="mpf"  value="<?php echo $row2['historiaC_mpf']; ?>"  >
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-12">
                <div class="form-group">
                  <label class="form-control-label">Tiempo de uso: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="tiempoDeUso"  value="<?php echo $row2['historiaC_tiempo_de_uso']; ?>"  >
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">DOCMA: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="docma"  value="<?php echo $row2['historiaC_docma']; ?>"  >
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-2">
                <div class="form-group">
                  <label class="form-control-label">Gesta: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="gesta"  value="<?php echo $row2['historiaC_gesta']; ?>"  >
                </div>
              </div><!-- col-4 -->  
              <div class="col-lg-2">
                <div class="form-group">
                  <label class="form-control-label">Para: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="para"  value="<?php echo $row2['historiaC_para']; ?>"  >
                </div>
              </div>
              <div class="col-lg-2">
                <div class="form-group">
                  <label class="form-control-label">Aborto: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="aborto"  value="<?php echo $row2['historiaC_aborto']; ?>"  >
                </div>
              </div>
              <div class="col-lg-2">
                <div class="form-group">
                  <label class="form-control-label">Legrado: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="legrado"  value="<?php echo $row2['historiaC_legrado']; ?>"  >
                </div>
              </div>
              <div class="col-lg-2">
                <div class="form-group">
                  <label class="form-control-label">AMEU: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="ameu"  value="<?php echo $row2['historiaC_ameu']; ?>"  >
                </div>
              </div>
              <div class="col-lg-2">
                <div class="form-group">
                  <label class="form-control-label">Cesária: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="cesaria"  value="<?php echo $row2['historiaC_cesaria']; ?>"  >
                </div>
              </div>
              <div class="col-lg-8">
                <div class="form-group">
                  <label class="form-control-label">Indicación: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="indicacion"  value="<?php echo $row2['historiaC_indicacion']; ?>"  >
                </div>
              </div>
              <div class="col-lg-3">
                <div class="form-group">
                  <label class="form-control-label">Edad primer embarazo: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="edadPrimerEmbarazo" value="<?php echo $row2['historiaC_edad_primer_embarazo']; ?>"  >
                </div>
              </div><!-- col-4 --> 
              <div class="col-lg-3">
                <div class="form-group">
                  <label class="form-control-label">Fecha de último parto: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="FechaUltimoParto"  value="<?php echo $row2['historiaC_fecha_ultimo_parto']; ?>"  >
                </div>
              </div><!-- col-4 -->  
              <div class="col-lg-3">
                <div class="form-group">
                  <label class="form-control-label">Fecha de último aborto: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="FechaUltimoAborto"  value="<?php echo $row2['historiaC_fecha_ultimo_aborto']; ?>">
                </div>
              </div><!-- col-4 -->   
              <div class="col-lg-3">
                <div class="form-group">
                  <label class="form-control-label">Fecha de última cesaria: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="FechaUltimaCesaria"  value="<?php echo $row2['historiaC_fecha_ultima_cesaria']; ?>"  >
                </div>
              </div><!-- col-4 -->   
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Indicación: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="indicacion2" value="<?php echo $row2['historiaC_indicacion2']; ?>"   >
                </div>
              </div><!-- col-4 --> 
              <div class="col-lg-2">
                <div class="form-group">
                  <label class="form-control-label">Peso : <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="peso"  value="<?php echo $row2['historiaC_peso']; ?>"  >
                </div>
              </div><!-- col-4 --> 
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Productos : <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="productos" value="<?php echo $row2['historiaC_productos']; ?>"   >
                </div>
              </div><!-- col-4 --> 
              <div class="col-lg-2">
                <div class="form-group">
                  <label class="form-control-label">Malformaciones: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="malformaciones" value="<?php echo $row2['historiaC_malformaciones']; ?>"  placeholder="(Si / No)">
                </div>
              </div><!-- col-4 --> 
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Describir: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="describir"  value="<?php echo $row2['historiaC_describir']; ?>"  >
                </div>
              </div><!-- col-4 -->

              <div class="col-lg-12"> 
                <div class="form-group">     
              <label class="section-title">EMBARAZO ACTUAL:</label>   
              <textarea rows="5" class="form-control" placeholder="Embarazo Actual" name="embarazoActual"> <?php echo $row2['historiaC_embarazo_actual']; ?></textarea>             
                 </div><!-- col-4 -->          
              </div><!-- form-layout -->

              <div class="col-lg-12"> 
                <div class="form-group">     
              <label class="section-title">PADECIMIENTO ACTUAL:</label>   
              <textarea rows="5" class="form-control" placeholder="Padecimiento Actual" name="padecimientoActual"><?php echo $row2['historiaC_padecimiento_actual']; ?></textarea>             
                 </div><!-- col-4 -->          
              </div><!-- form-layout -->

              <div class="col-lg-12">      
              <label class="section-title">EXPLORACIÓN FÍSICA::</label>            
              </div><!-- form-layout -->
 
              <div class="col-lg-2">
                <div class="form-group">
                  <label class="form-control-label">Peso: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="peso2"   value="<?php echo $row2['historiaC_peso_exploracion_fisica']; ?>" placeholder="Kg">
                </div>
              </div><!-- col-4 -->

              <div class="col-lg-2">
                <div class="form-group">
                  <label class="form-control-label">T: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="T"    value="<?php echo $row2['historiaC_T']; ?>">
                </div>
              </div><!-- col-4 -->

              <div class="col-lg-2">
                <div class="form-group">
                  <label class="form-control-label">TA: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="TA"    value="<?php echo $row2['historiaC_TA']; ?>">
                </div>
              </div><!-- col-4 -->

              <div class="col-lg-2">
                <div class="form-group">
                  <label class="form-control-label">FC: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="FC"    value="<?php echo $row2['historiaC_FC']; ?>">
                </div>
              </div><!-- col-4 -->

              <div class="col-lg-2">
                <div class="form-group">
                  <label class="form-control-label">FR: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="FR"    value="<?php echo $row2['historiaC_FR']; ?>">
                </div>
              </div><!-- col-4 -->

              <div class="col-lg-2">
                <div class="form-group">
                  <label class="form-control-label">TEM: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="TEM"    value="<?php echo $row2['historiaC_TEM']; ?>">
                </div>
              </div><!-- col-4 -->

              <div class="col-lg-12">
                <div class="form-group">
                  <label class="form-control-label">Cabeza y cuello: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="cabezaCuello"    value="<?php echo $row2['historiaC_cabeza_cuello']; ?>">
                </div>
              </div><!-- col-4 -->

              <div class="col-lg-12">
                <div class="form-group">
                  <label class="form-control-label">Cardiorespiratorio: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="cardiorespiratorio"   value="<?php echo $row2['historiaC_cardiorespiratorio']; ?>">
                </div>
              </div><!-- col-4 -->

              <div class="col-lg-12">
                <div class="form-group">
                  <label class="form-control-label">Glandulas: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="glandulas" value="<?php echo $row2['historiaC_glandulas']; ?>">
                </div>
              </div><!-- col-4 -->

              <div class="col-lg-12">
                <div class="form-group">
                  <label class="form-control-label">Abdomen: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="abdomen"    value="<?php echo $row2['historiaC_abdomen']; ?>">
                </div>
              </div><!-- col-4 -->

              <div class="col-lg-3">
                <div class="form-group">
                  <label class="form-control-label">FU: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="FU"    value="<?php echo $row2['historiaC_FU']; ?>">
                </div>
              </div><!-- col-4 -->

              <div class="col-lg-3">
                <div class="form-group">
                  <label class="form-control-label">S: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="S"   value="<?php echo $row2['historiaC_S']; ?>">
                </div>
              </div><!-- col-4 -->

              <div class="col-lg-3">
                <div class="form-group">
                  <label class="form-control-label">P: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="P"  value="<?php echo $row2['historiaC_P']; ?>">
                </div>
              </div><!-- col-4 -->

              <div class="col-lg-3">
                <div class="form-group">
                  <label class="form-control-label">D: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="D"  value="<?php echo $row2['historiaC_D']; ?>">
                </div>
              </div><!-- col-4 -->

              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">LIB / ABO / ENC: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="LIB"   value="<?php echo $row2['historiaC_LIB_ABO_ENC']; ?>">
                </div>
              </div><!-- col-4 -->

              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Tacto vaginal:<span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="tactoVaginal"   value="<?php echo $row2['historiaC_tacto_vaginal']; ?>">
                </div>
              </div><!-- col-4 -->

              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Dilatación:<span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="dilatacion" value="<?php echo $row2['historiaC_dilatacion']; ?>">
                </div>
              </div><!-- col-4 -->

              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Variedad de posición:<span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="variedadPosicion"  value="<?php echo $row2['historiaC_variedad_de_posicion']; ?>">
                </div>
              </div><!-- col-4 -->

              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Especuloscopia:<span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="especuloscopia"   value="<?php echo $row2['historiaC_especuloscopia']; ?>">
                </div>
              </div><!-- col-4 -->

              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Membranas íntegras:<span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="membranasIntegras"   placeholder="Si / No " value="<?php echo $row2['historiaC_menbranas_integras']; ?>">
                </div>
              </div><!-- col-4 -->

              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Fecha y Hora:<span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="fechahora"   value="<?php echo $row2['historiaC_fecha_hora']; ?>">
                </div>
              </div><!-- col-4 -->

              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Caracteristicas del liquido:<span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="caracteristicasLiquido"  value="<?php echo $row2['historiaC_caracteristicas_de_liquido']; ?>">
                </div>
              </div><!-- col-4 -->

              <div class="col-lg-6">
                <div class="form-group">
                  <label class="form-control-label">Exploración ginecológica:<span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="exploracionGinecologica"   value="<?php echo $row2['historiaC_exploracion_ginecologica']; ?>">
                </div>
              </div><!-- col-4 -->

               <div class="col-lg-6">
                <div class="form-group">
                  <label class="form-control-label">Pelvis:<span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="pelvis"  value="<?php echo $row2['historiaC_pelvis']; ?>">
                </div>
              </div><!-- col-4 -->

              <div class="col-lg-12">      
              <p class="mg-b-20 mg-sm-b-40">Extremidades:</p>           
              </div><!-- form-layout -->
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Edema:<span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="edema"   value="<?php echo $row2['historiaC_edema']; ?>">
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Hiperreflexia:<span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="hiperrflexia" value="<?php echo $row2['historiaC_hiperrflexia']; ?>">
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Llenado capilar:<span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="llenadoCapilar"  value="<?php echo $row2['historiaC_llenado_capilar']; ?>">
                </div>
              </div><!-- col-4 -->

              <div class="col-lg-12">
                <div class="form-group">
                  <label class="form-control-label">Paraclinicos:<span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="paraclinicos"  value="<?php echo $row2['historiaC_paraclinicos']; ?>">
                </div>
              </div><!-- col-4 -->



              <div class="col-lg-12"> 
                <div class="form-group">     
              <label class="section-title">DIAGNÓSTICOS:</label>   
              <textarea rows="5" class="form-control" name="diagnosticos"  ><?php echo $row2['historiaC_diagnosticos']; ?></textarea>             
                 </div><!-- col-4 -->          
              </div><!-- form-layout -->

              <div class="col-lg-12"> 
                <div class="form-group">     
              <label class="section-title">ANÁLISIS:</label>   
              <textarea rows="5" class="form-control" name="analisis"  ><?php echo $row2['historiaC_analisis']; ?></textarea>             
                 </div><!-- col-4 -->          
              </div>

              <div class="col-lg-12"> 
                <div class="form-group">     
              <label class="section-title">PLAN:</label>   
              <textarea rows="5" class="form-control" name="plan"  ><?php echo $row2['historiaC_plan']; ?></textarea>             
                 </div><!-- col-4 -->          
              </div> 

              <div class="col-lg-12"> 
                <div class="form-group">     
              <label class="section-title">PRONÓSTICO:</label>   
              <textarea rows="5" class="form-control" name="pronostico"  ><?php echo $row2['historiaC_plan']; ?></textarea>             
                 </div><!-- col-4 -->          
              </div> 
            
              </div><!-- row -->
              <div class="form-layout-footer">
              <button type="submit" class="btn btn-primary bd-0">Guardar</button>
              <button type="s"  class="btn btn-secondary bd-0" role="link" onclick="window.location='index.php';return false;">Cancel</button>
              <button class="btn btn-outline-danger" role="link" onclick="window.location='index.php';return false;"><i class="fa fa-print"></i> Generar PDF</button>
            </div><!-- form-layout-footer -->
            </div><!-- form-layout -->
        </div><!-- section-wrapper -->
</form> 
      


      </div><!-- container -->
    </div><!-- slim-mainpanel -->


  <div class="slim-footer">
      <?php include 'footer.php';?>
    </div><!-- slim-footer -->

    <script src="lib/jquery/js/jquery.js"></script>
    <script src="lib/popper.js/js/popper.js"></script>
    <script src="lib/bootstrap/js/bootstrap.js"></script>

    <script src="js/slim.js"></script>
  </body>
</html>
