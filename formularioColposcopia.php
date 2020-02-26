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
            <li class="breadcrumb-item"><a href="#">Inicio</a></li>
            <li class="breadcrumb-item active" aria-current="page">Colposcopia</li>
          </ol>
          <h6 class="slim-pagetitle">Colposcopia</h6>
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
            $query2= "SELECT * FROM tbcolposcopias WHERE paciente_id=?";
        $q2 = $pdo->prepare($query2);
        $q2->execute(array($paciente_id));
        $row2 = $q2->fetch(PDO::FETCH_ASSOC);
        Database::disconnect();
          ?>
    <form action="Model/modificarColposcopia.php?idpaciente=<?php echo $paciente_id?>" method="POST"> 
        <div class="section-wrapper">
          <label class="section-title">FICHA DE INDENTIFICACIÓN</label>
          <div class="form-layout">
            <div class="row mg-b-25">

              <div class="col-lg-4">
                <div class="form-group">
                   <i class="icon ion-person tx-16 lh-0 op-6"></i>  
                  <label class="form-control-label">Nombre de la paciente: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text"    value="<?php echo $row['paciente_nombre']; ?>"   readonly="readonly">
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-2">
                <div class="form-group">
                  <i class="fa fa-phone tx-16 lh-0 op-6"></i>
                  <label class="form-control-label">Telefono: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text"    value="<?php echo $row['paciente_telefono']; ?>"  placeholder=" " readonly="readonly">
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-6">
                <div class="form-group">
                  <label class="form-control-label">Dirección: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text"   value="<?php echo $row['paciente_domicilio']; ?>"  placeholder=" " readonly="readonly">
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-2">
                <div class="form-group">
                  <label class="form-control-label">Codigo Postal: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text"  value="<?php echo $row['paciente_codigo_postal']; ?>"  placeholder=" " readonly="readonly">
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-2">
                <div class="form-group">
                  <i class="fa fa-calendar tx-16 lh-0 op-6"></i>  
                  <label class="form-control-label">Fecha: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="date"  name="fecha"  value="<?php echo $row2['colposcopia_fecha']; ?>" >
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-2">
                <div class="form-group">
                  <label class="form-control-label">Edad: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text"    value="<?php echo $row['paciente_edad']; ?>"  placeholder=" " readonly="readonly">
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-2">
                <div class="form-group">
                  <label class="form-control-label">Peso: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="peso"  value="<?php echo $row2['colposcopia_peso']; ?>" placeholder=" ">
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-2">
                <div class="form-group">
                  <label class="form-control-label">Talla: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="talla" value="<?php echo $row2['colposcopia_talla']; ?>"  placeholder=" ">
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-2">
                <div class="form-group">
                  <label class="form-control-label">TA: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="TA"  value="<?php echo $row2['colposcopia_TA']; ?>" placeholder=" ">
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Tabaquismo: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="tabaquismo"  value="<?php echo $row2['colposcopia_tabaquismo']; ?>" placeholder=" ">
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Estado Civil: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text"   value="<?php echo $row['paciente_estado_civil']; ?>"  placeholder=" " readonly="readonly">
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Ocupación: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text"  value="<?php echo $row['paciente_ocupacion']; ?>"  placeholder=" " readonly="readonly">
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-6">
                <div class="form-group">
                  <label class="form-control-label">AHF: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="ahf" value="<?php echo $row2['colposcopia_AHF']; ?>"  placeholder=" ">
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-3">
                <div class="form-group">
                  <label class="form-control-label">AGO: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="ago" value="<?php echo $row2['colposcopia_AGO']; ?>"  placeholder=" ">
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-3">
                <div class="form-group">
                  <label class="form-control-label">Menarca: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="menarca" value="<?php echo $row2['colposcopia_menarca']; ?>"  placeholder=" ">
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-2">
                <div class="form-group">
                  <label class="form-control-label">Ritmo: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="ritmo" value="<?php echo $row2['colposcopia_ritmo']; ?>"  placeholder=" ">
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-2">
                <div class="form-group">
                  <label class="form-control-label">IVSA: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="ivsa" value="<?php echo $row2['colposcopia_IVSA']; ?>"  placeholder=" ">
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-2">
                <div class="form-group">
                  <label class="form-control-label">PS: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="ps"  value="<?php echo $row2['colposcopia_PS']; ?>" placeholder=" ">
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-2">
                <div class="form-group">
                  <label class="form-control-label">Total de PAP: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="totalPAP"  value="<?php echo $row2['colposcopia_total_PAP']; ?>" placeholder=" ">
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-2">
                <div class="form-group">
                  <label class="form-control-label">FUPAP: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="fupap"  value="<?php echo $row2['colposcopia_FUPAP']; ?>" placeholder=" ">
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-2">
                <div class="form-group">
                  <label class="form-control-label">MPF: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="mpf"  value="<?php echo $row2['colposcopia_MPF']; ?>" placeholder=" ">
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-2">
                <div class="form-group">
                  <label class="form-control-label">Gesta: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="gesta" value="<?php echo $row2['colposcopia_gesta']; ?>"  placeholder=" ">
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-2">
                <div class="form-group">
                  <label class="form-control-label">Para: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="para"  value="<?php echo $row2['colposcopia_para']; ?>" placeholder=" ">
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-2">
                <div class="form-group">
                  <label class="form-control-label">Cesária: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="cesaria"  value="<?php echo $row2['colposcopia_cesaria']; ?>" placeholder=" ">
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-2">
                <div class="form-group">
                  <label class="form-control-label">Aborto: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="aborto"  value="<?php echo $row2['colposcopia_aborto']; ?>" placeholder=" ">
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-2">
                <div class="form-group">
                  <label class="form-control-label">LUI: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="lui"  value="<?php echo $row2['colposcopia_LUI']; ?>" placeholder=" ">
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-10">
                <div class="form-group">
                  <label class="form-control-label">APP: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="app" value="<?php echo $row2['colposcopia_APP']; ?>"  placeholder=" ">
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-2">
                <div class="form-group">
                  <label class="form-control-label">EPE: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="epe" value="<?php echo $row2['colposcopia_EPE']; ?>"  placeholder=" ">
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">FUP: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="fup" value="<?php echo $row2['colposcopia_FUP']; ?>"  placeholder=" ">
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">FUR: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="fur" value="<?php echo $row2['colposcopia_FUR']; ?>"  placeholder=" ">
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">ITS: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="its" value="<?php echo $row2['colposcopia_ITS']; ?>"  placeholder=" ">
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-5">
                <div class="form-group">
                  <label class="form-control-label">Tx previo: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="txPrevio" value="<?php echo $row2['colposcopia_tx_previo']; ?>"  placeholder=" ">
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-6">
                <div class="form-group">
                  <label class="form-control-label">Sintomas del TGI: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="sintomasTGI" value="<?php echo $row2['colposcopia_sintomas_del_TGI']; ?>"  placeholder=" ">
                </div>
              </div><!-- col-4 -->


              <div class="col-lg-12"> 
                <div class="form-group">     
              <label class="section-title">Hallazgos Colposcopicos:</label>               
                 </div><!-- col-4 -->          
              </div><!-- form-layout -->
              <div class="col-lg-4">
                <div class="form-group mg-b-10-force">
                  <label class="form-control-label">Colposcopia: <span class="tx-danger">*</span></label>
                  <select name="colposcopia" class="form-control select2" >    
                    <option value="<?php echo $row2['colposcopia_colposcopia']; ?>" ><?php echo $row2['colposcopia_colposcopia']; ?></option>                
                    <option value="Adecuada">Adecuada</option>
                    <option value="Inadecuada">Inadecuada</option>
                  </select>
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-4">
                <div class="form-group mg-b-10-force">
                  <label class="form-control-label">Indice de Reid: <span class="tx-danger">*</span></label>
                  <select name="indiceReid" class="form-control select2" >   
                  <option value="<?php echo $row2['colposcopia_indice_reid']; ?>"  ><?php echo $row2['colposcopia_indice_reid']; ?></option>                   
                    <option value="0-2">0-2</option>
                    <option value="3-5">3-5</option>
                    <option value="6-8">6-8</option>
                  </select>
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-4">
                <div class="form-group mg-b-10-force">
                  <label class="form-control-label">Nivel de Campion: <span class="tx-danger">*</span></label>
                  <select name="nivelCampion" class="form-control select2" >   
                    <option value="<?php echo $row2['colposcopia_nivel_campion']; ?>"  ><?php echo $row2['colposcopia_nivel_campion']; ?></option>                  
                    <option value="I">I</option>
                    <option value="II">II</option>
                    <option value="III">III</option>
                    <option value="IV">IV</option>
                    <option value="V">V</option>
                    <option value="VI">VI</option>
                  </select>
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-3">
                <div class="form-group">
                  <label class="form-control-label">Extensión Lineal: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="extensionLineal" value="<?php echo $row2['colposcopia_extension_lineal']; ?>"  placeholder=" ">
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-3">
                <div class="form-group">
                  <label class="form-control-label">Vagina Sana: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="VaginaSana" value="<?php echo $row2['colposcopia_vagina_sana']; ?>"    placeholder=" ">
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-3">
                <div class="form-group">
                  <label class="form-control-label">Vulva Sana: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="VulvaSana" value="<?php echo $row2['colposcopia_vulva_sana']; ?>"    placeholder=" ">
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-3">
                <div class="form-group">
                  <label class="form-control-label">Region perianal sana: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="PerianalSana" value="<?php echo $row2['colposcopia_region_perianal_sana']; ?>"   placeholder=" ">
                </div>
              </div><!-- col-4 -->

              <div class="col-lg-12"> 
                <div class="form-group">     
              <label class="section-title">Impresión colposcópica:</label>               
                 </div><!-- col-4 -->          
              </div><!-- form-layout -->
              <div class="col-lg-4">
                  <select name="impresionColposcopica" class="form-control select2" > 
                    <option value="<?php echo $row2['colposcopia_impresion_colposcopica']; ?>"  ><?php echo $row2['colposcopia_impresion_colposcopica']; ?></option>                   
                    <option value="Sin alteraciones">Sin alteraciones</option>
                    <option value="Alteraciones inflamatorias">Alteraciones inflamatorias</option>
                    <option value="Atrofia">Atrofia</option>
                    <option value="Polipo endocervical">Polipo endocervical</option>
                    <option value="Ectropion">Ectropion</option>
                    <option value="Condiloma acuminado">Condiloma acuminado</option>
                    <option value="Lesion intraepiterial de bajo grado">Lesion intraepiterial de bajo grado</option>
                    <option value="Lesion intraepiterial de alto grado">Lesion intraepiterial de alto grado</option>
                    <option value="Sospecha de cancer microinvasor">Sospecha de cancer microinvasor</option>
                    <option value="Sospecha de cancer invasor">Sospecha de cancer invasor</option>
                  </select>
              </div>
              <div class="col-lg-12">
                <div class="form-group">
                  <label class="form-control-label">Observaciones: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="observaciones" value="<?php echo $row2['colposcopia_observaciones']; ?>"  placeholder=" ">
                </div>
              </div><!-- col-4 -->

              </div><!-- row -->
              <div class="form-layout-footer">
              <button type="submit" class="btn btn-primary bd-0">Guardar</button>
              <button type="s"  class="btn btn-secondary bd-0" role="link" onclick="window.location='index.php';return false;">Cancel</button>
              <button class="btn btn-outline-danger" role="link" onclick="window.location='imprimir/impColposcopia.php?idpaciente=<?php echo $paciente_id?>';return false;"><i class="fa fa-print"></i> Generar PDF</button>
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
