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
            <li class="breadcrumb-item active" aria-current="page">Carné Perinatal</li>
          </ol>
          <h6 class="slim-pagetitle">Carné Perinatal</h6>
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
            $query2= "SELECT * FROM tbperinatal WHERE paciente_id=?";
        $q2 = $pdo->prepare($query2);
        $q2->execute(array($paciente_id));
        $row2 = $q2->fetch(PDO::FETCH_ASSOC);
        Database::disconnect();
          ?>
   <form action="Model/modificarPerinatal.php?idpaciente=<?php echo $paciente_id?>" method="POST"> 

        <div class="section-wrapper">
          <label class="section-title">FICHA DE INDENTIFICACIÓN</label>
          <div class="form-layout">
            <div class="row mg-b-25">
              <div class="col-lg-4">
                <div class="form-group">
                   <i class="icon ion-person tx-16 lh-0 op-6"></i>  
                  <label class="form-control-label">Nombre de la paciente: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" value="<?php echo $row['paciente_nombre']; ?>"   readonly="readonly">
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-5">
                <div class="form-group">
                  <label class="form-control-label">Domicilio: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" value="<?php echo $row['paciente_domicilio']; ?>"   readonly="readonly">
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-3">
                <div class="form-group">
                  <label class="form-control-label">Localidad: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="localidad"    value="<?php echo $row2['perinatal_localidad']; ?>">
                </div>
              </div>
              <div class="col-lg-3">
                <div class="form-group">
                  <label class="form-control-label">Edad: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" value="<?php echo $row['paciente_edad']; ?>"   readonly="readonly">
                  <label class="ckbox">
                <input type="checkbox" name="mayor/menor"><span>Menor de 15 / Mayor de 35</span>
              </label>
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-1">
                <div class="form-group mg-b-10-force">
                  <label class="form-control-label">AlfaBeta:  </label>
                  <select class="form-control select2" name="alfabeta" >  
                  <option value="<?php echo $row2['perinatal_alfabeta']; ?>"  ><?php echo $row2['perinatal_alfabeta']; ?></option>                      
                    <option value="Si">Si</option>
                    <option value="No">No</option>                   
                  </select>
                </div>
              </div>
              <div class="col-lg-2">
                <div class="form-group mg-b-10-force">
                  <label class="form-control-label">Estudios:  </label>
                  <select class="form-control select2" name="estudios" >  
                  <option value="<?php echo $row2['perinatal_estudios']; ?>"  ><?php echo $row2['perinatal_estudios']; ?></option>                   
                    <option value="Ninguna">Ninguno</option>
                    <option value="Secunfaria">Secundaria</option>  
                    <option value="Primaria">Primaria</option> 
                    <option value="Universidad">Universidad</option>                  
                  </select>
                  <input class="form-control" type="Templatext" name="anosAprobados" value="<?php echo $row2['perinatal_anos_aprobados']; ?>"  placeholder="Años Aprobados">
                </div>
              </div>
              <div class="col-lg-2">
                <div class="form-group mg-b-10-force">
                  <label class="form-control-label">Estado Civil:  </label>
                  <select class="form-control select2" name="estadocivil"  >   
                  <option value="<?php echo $row2['perinatal_estado_civil']; ?>"  ><?php echo $row2['perinatal_estado_civil']; ?></option>                 
                    <option value="Casada">Casada</option>
                    <option value="Unión libre">Unión libre</option>  
                    <option value="Soltera">Soltera</option> 
                    <option value="Otro">Otro</option>                  
                  </select>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Lugar de control perinatal(Origen): <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="origen"   value="<?php echo $row2['perinatal_lugar_origen']; ?>" placeholder=" ">
                </div>
              </div>
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Lugar de Parto (Establecimiento): <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="establecimiento"  value="<?php echo $row2['perinatal_lugar_establecimiento']; ?>">
                </div>
              </div>
              <div class="col-lg-3">
                <div class="form-group">
                  <label class="form-control-label">Número H.C. <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="hc" value="<?php echo $row2['perinatal_numero_hc']; ?>">
                </div>
              </div>


               <div class="col-lg-12">    
              <label class="section-title">Antecedentes Familiares</label>               
                 </div>
                 <div class="col-lg-2">
                <div class="form-group mg-b-10-force">
                  <label class="form-control-label">Diabetes:  </label>
                  <select class="form-control select2"name="diabetesF"  > 
                  <option value="<?php echo $row2['perinatal_diabetes_familiar']; ?>"  ><?php echo $row2['perinatal_estado_civil']; ?></option>   
                   <option value="No">No</option>                  
                    <option value="Si">Si</option>                 
                  </select>
                </div>
              </div>
              <div class="col-lg-2">
                <div class="form-group mg-b-10-force">
                  <label class="form-control-label">TBC Pulmonar:  </label>
                  <select class="form-control select2" name="tbcF" >  
                  <option value="<?php echo $row2['perinatal_tbc_familiar']; ?>"  ><?php echo $row2['perinatal_tbc_familiar']; ?></option>   
                   <option value="No">No</option>                  
                    <option value="Si">Si</option>                                     
                 </select>
                </div>
              </div>
              <div class="col-lg-2">
                <div class="form-group mg-b-10-force">
                  <label class="form-control-label">Hipertensión :  </label>
                  <select class="form-control select2" name="hipertensionF" > 
                  <option value="<?php echo $row2['perinatal_hipertension_familiar']; ?>"  ><?php echo $row2['perinatal_hipertension_familiar']; ?></option>    
                   <option value="No">No</option>                  
                    <option value="Si">Si</option>                                     
                 </select>
                </div>
              </div>
              <div class="col-lg-2">
                <div class="form-group mg-b-10-force">
                  <label class="form-control-label">Gemelares:  </label>
                  <select class="form-control select2" name="gemelaresF" >   
                    <option value="<?php echo $row2['perinatal_gemelares_familiar']; ?>"  ><?php echo $row2['perinatal_gemelares_familiar']; ?></option>  
                   <option value="No">No</option>                  
                    <option value="Si">Si</option>                                     
                 </select>
                </div>
              </div>   
              <div class="col-lg-2">
                <div class="form-group mg-b-10-force">
                  <label class="form-control-label">Otro:</label>
                  <select class="form-control select2" name="otroF" >   
                    <option value="<?php echo $row2['perinatal_otro_familiar']; ?>"  ><?php echo $row2['perinatal_otro_familiar']; ?></option>  
                   <option value="No">No</option>                  
                    <option value="Si">Si</option>                                     
                 </select>
                </div>
              </div>          

              <div class="col-lg-12">    
              <label class="section-title">Antecedentes Personales</label>               
                 </div>
                 <div class="col-lg-2">
                <div class="form-group mg-b-10-force">
                  <label class="form-control-label">Diabetes:</label>
                  <select class="form-control select2" name="diabetes" > 
                  <option value="<?php echo $row2['perinatal_diabetes_personal']; ?>"  ><?php echo $row2['perinatal_diabetes_personal']; ?></option>    
                   <option value="No">No</option>                  
                    <option value="Si">Si</option>                 
                  </select>
                <div class="form-group">
                  <label class="form-control-label">Otro <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="otro"  value="<?php echo $row2['perinatal_otro_personal']; ?>" >
                </div>

                </div>
              </div>
              <div class="col-lg-2">
                <div class="form-group mg-b-10-force">
                  <label class="form-control-label">TBC Pulmonar:  </label>
                  <select class="form-control select2" name="tbc" >   
                    <option value="<?php echo $row2['perinatal_TBC_personal']; ?>"  ><?php echo $row2['perinatal_TBC_personal']; ?></option> 
                   <option value="No">No</option>                  
                    <option value="Si">Si</option>                                     
                 </select>
                </div>
              </div>
              <div class="col-lg-2">
                <div class="form-group mg-b-10-force">
                  <label class="form-control-label">Hipertensión :  </label>
                  <select class="form-control select2" name="hipertension"  > 
                  <option value="<?php echo $row2['perinatal_hipertension_personal']; ?>"  ><?php echo $row2['perinatal_hipertension_personal']; ?></option>   
                   <option value="No">No</option>                  
                    <option value="Si">Si</option>                                     
                 </select>
                </div>
              </div>
              <div class="col-lg-2">
                <div class="form-group mg-b-10-force">
                  <label class="form-control-label">Cirugía Pélvica:  </label>
                  <select class="form-control select2" name="cirugia" >   
                    <option value="<?php echo $row2['perinatal_cirugia_pelvica_personal']; ?>"  ><?php echo $row2['perinatal_cirugia_pelvica_personal']; ?></option> 
                   <option value="No">No</option>                  
                    <option value="Si">Si</option>                                     
                 </select>
                </div>
              </div>   
              <div class="col-lg-2">
                <div class="form-group mg-b-10-force">
                  <label class="form-control-label">Infertilidad:</label>
                  <select class="form-control select2" name="infertilidad" >  
                  <option value="<?php echo $row2['perinatal_infertilidad_personal']; ?>"  ><?php echo $row2['perinatal_infertilidad_personal']; ?></option>  
                   <option value="No">No</option>                  
                    <option value="Si">Si</option>                                     
                 </select>
                </div>
              </div> 
              <div class="col-lg-2">
                <div class="form-group mg-b-10-force">
                  <label class="form-control-label">VIH+:</label>
                  <select class="form-control select2" name="vih" >  
                  <option value="<?php echo $row2['perinatal_VIH_personal']; ?>"  ><?php echo $row2['perinatal_VIH_personal']; ?></option>  
                   <option value="No">No</option>                  
                    <option value="Si">Si</option>                                     
                 </select>
                </div>
              </div> 


              <div class="col-lg-12">    
              <label class="section-title">Antecedentes Obstétricos</label>               
              </div> 
              <div class="col-lg-3">
                <div class="form-group mg-b-10-force">
                  <label class="form-control-label">Ninguna o mas de 3 partos:  </label>
                  <select class="form-control select2" name="masde3"> 
                  <option value="<?php echo $row2['perinatal_3_partos']; ?>"  ><?php echo $row2['perinatal_3_partos']; ?></option>   
                   <option value="No">No</option>                  
                    <option value="Si">Si</option>                                     
                  </select>
                  <label class="form-control-label">Algún RN menor de 2500 g:</label>
                  <select class="form-control select2" name="rnmenor">   
                    <option value="<?php echo $row2['perinatal_rn_menor_2500']; ?>"  ><?php echo $row2['perinatal_rn_menor_2500']; ?></option>  
                   <option value="No">No</option>                  
                    <option value="Si">Si</option>                                     
                  </select>
                  <label class="form-control-label">Gemelares:</label>
                  <select class="form-control select2" name="gemelares2">  
                  <option value="<?php echo $row2['perinatal_gemelares']; ?>"  ><?php echo $row2['perinatal_gemelares']; ?></option>  
                   <option value="No">No</option>                  
                    <option value="Si">Si</option>                                     
                  </select>
                </div>
              </div>
              <div class="col-lg-1">
                <div class="form-group">
                  <label class="form-control-label">Gestas </label>
                  <input class="form-control" type="text" name="gestas" value="<?php echo $row2['perinatal_gestas']; ?>">
                  <label class="form-control-label">Abortos </label>
                  <input class="form-control" type="text" name="abortos" value="<?php echo $row2['perinatal_abortos']; ?>">
                </div>
              </div>  
              <div class="col-lg-1">
                <div class="form-group">
                  <label class="form-control-label">Partos </label>
                  <input class="form-control" type="text" name="partos" value="<?php echo $row2['perinatal_partos']; ?>">
                  <label class="form-control-label">Vaginales </label>
                  <input class="form-control" type="text" name="vaginales"  value="<?php echo $row2['perinatal_vaginales']; ?>">
                  <label class="form-control-label">Cesáreas </label>
                  <input class="form-control" type="text" name="cesarias" value="<?php echo $row2['perinatal_cesareas']; ?>">
                </div>
              </div> 
              <div class="col-lg-2">
                <div class="form-group">
                  <label class="form-control-label">Nacidos Vivos</label>
                  <input class="form-control" type="text" name="nacidosVivos" value="<?php echo $row2['perinatal_nacidos_vivos']; ?>">
                  <label class="form-control-label">Nacidos Muertos</label>
                  <input class="form-control" type="text" name="nacidosMuertos"  value="<?php echo $row2['perinatal_nacidos_muertos']; ?>">
                </div>
              </div> 
              <div class="col-lg-2">
                <div class="form-group">
                  <label class="form-control-label">Viven</label>
                  <input class="form-control" type="text" name="viven" value="<?php echo $row2['perinatal_viven']; ?>">
                  <label class="form-control-label">Muertos 1ra. semana</label>
                  <input class="form-control" type="text" name="muertos1ra"  value="<?php echo $row2['perinatal_muertos_1ra_sem']; ?>">
                  <label class="form-control-label">Después 1ra. semana</label>
                  <input class="form-control" type="text" name="despues1ra"  value="<?php echo $row2['perinatal_despues_1ra_sem']; ?>">
                </div>
              </div> 
              <div class="col-lg-3">
                <div class="form-group">
                  <label class="form-control-label">Fin anterior embarazo</label>
                  <input class="form-control" type="text" name="ateriorEmbarazoMes"   placeholder="Mes" value="<?php echo $row2['perinatal_fin_anterior_embarazo_mes']; ?>">
                  <input class="form-control" type="text" name="anteriorEmbarazoAño"   placeholder="Año" value="<?php echo $row2['perinatal_fin_anterior_embarazo_ano']; ?>">
                  <label class="form-control-label">R.N. con mayor peso</label>
                  <input class="form-control" type="text" name="rnMayorPeso"   placeholder="g"  value="<?php echo $row2['perinatal_rn_mayor_peso']; ?>">
                </div>
              </div> 


               <div class="col-lg-12">    
              <label class="section-title">Enbarazo Actual</label>               
                 </div>
                 <div class="col-lg-3">
                <div class="form-group">
                  <label class="form-control-label">Peso Anterior</label>
                  <input class="form-control" type="text" name="pesoAnterior"   placeholder="kg" value="<?php echo $row2['perinatal_peso_anterior']; ?>">
                   <label class="form-control-label">Talla (cm)</label>
                  <input class="form-control" type="text" name="talla" value="<?php echo $row2['perinatal_talla']; ?>">
                </div>
              </div> 
              <div class="col-lg-1">
                <div class="form-group">
                  <label class="form-control-label"> <span class="tx-danger">*</span></label>
                  <input class="form-control" placeholder="Dia" readonly="" type="text">
                  <input class="form-control" placeholder="Mes" readonly="" type="text">
                  <input class="form-control" placeholder="Año" readonly="" type="text">
                </div>
              </div> 
              <div class="col-lg-1">
                <div class="form-group">
                  <label class="form-control-label">FUM</label>
                  <input class="form-control" type="text" name="FUMdia"   placeholder="Dia" value="<?php echo $row2['perinatal_FUM_dia']; ?>">
                  <input class="form-control" type="text" name="FUMmes"   placeholder="Mes" value="<?php echo $row2['perinatal_FUM_mes']; ?>">
                  <input class="form-control" type="text" name="FUMaño"   placeholder="Año" value="<?php echo $row2['perinatal_FUM_ano']; ?>">
                </div>
              </div> 
              <div class="col-lg-1">
                <div class="form-group">
                  <label class="form-control-label">FPP</label>
                  <input class="form-control" type="text" name="FPPdia"   placeholder="Dia" value="<?php echo $row2['perinatal_FPP_dia']; ?>">
                  <input class="form-control" type="text" name="FPPmes"   placeholder="Mes" value="<?php echo $row2['perinatal_FPP_mes']; ?>">
                  <input class="form-control" type="text" name="FPPaño"   placeholder="Año" value="<?php echo $row2['perinatal_FPP_ano']; ?>">
                </div>
              </div> 
               <div class="col-lg-2">
                <div class="form-group mg-b-10-force">
                  <label class="form-control-label">Dudas:</label>
                  <select class="form-control select2" name="dudas"  > 
                  <option value="<?php echo $row2['perinatal_dudas']; ?>"  ><?php echo $row2['perinatal_dudas']; ?></option>  
                   <option value="No">No</option>                  
                    <option value="Si">Si</option>                                     
                 </select>
                 <label class="form-control-label">Antitetanica Previa:</label>
                  <select class="form-control select2" name="antitetanicaPrevia" >
                  <option value="<?php echo $row2['perinatal_antitetanica_previa']; ?>"  ><?php echo $row2['perinatal_antitetanica_previa']; ?></option>   
                   <option value="No">No</option>                  
                    <option value="Si">Si</option>                                     
                 </select>
                </div>
              </div> 
              <div class="col-lg-2">
                <div class="form-group mg-b-10-force">
                  <label class="form-control-label">Antitetanica Actual:</label>
                  <select class="form-control select2" name="antitetanicaActual" >  
                  <option value="<?php echo $row2['perinatal_antitetanica_actual']; ?>"  ><?php echo $row2['perinatal_antitetanica_actual']; ?></option>  
                   <option value="No">No</option>                  
                    <option value="Si">Si</option>                                     
                 </select>
                </div>
              </div> 
              <div class="col-lg-2">
                <div class="form-group mg-b-10-force">
                  <label class="form-control-label">1°</label>
                  <input class="form-control" type="text" name="uno"   placeholder="Mes" value="<?php echo $row2['perinatal_1']; ?>">
                  <label class="form-control-label">2°/B</label>
                  <input class="form-control" type="text" name="dos"   placeholder="Gesta" value="<?php echo $row2['perinatal_2B']; ?>">
                </div>
              </div> 
              <div class="col-lg-3">
                <div class="form-group mg-b-10-force">
                  <label class="form-control-label">Grupo</label>
                  <input class="form-control" type="text" name="grupo"   placeholder="" value="<?php echo $row2['perinatal_grupo']; ?>">
                  <label class="form-control-label">Rh:</label>
                  <select class="form-control select2" name="rh">  
                  <option value="<?php echo $row2['perinatal_Rh']; ?>"  ><?php echo $row2['perinatal_Rh']; ?></option>  
                   <option value="+">+</option>                  
                    <option value="-">-</option>                                     
                 </select>              
                </div>
              </div> 
              <div class="col-lg-3">
                <div class="form-group mg-b-10-force">
                  <label class="form-control-label">Sensibil:</label>
                  <select class="form-control select2" name="sensibil"  >  
                  <option value="<?php echo $row2['perinatal_sensibil']; ?>"  ><?php echo $row2['perinatal_sensibil']; ?></option>  
                   <option value="No">No</option>                  
                    <option value="Si">Si</option>                                     
                 </select>
                </div>
              </div> 
              <div class="col-lg-3">
                <div class="form-group mg-b-10-force">
                  <label class="form-control-label">Fuma:</label>
                  <select class="form-control select2" name="fuma"  >   
                    <option value="<?php echo $row2['perinatal_fuma']; ?>"  ><?php echo $row2['perinatal_fuma']; ?></option> 
                   <option value="No">No</option>                  
                    <option value="Si">Si</option>                                     
                 </select>
                 <label class="form-control-label">Cigarrillos por dia</label>
                  <input class="form-control" type="text" name="cigarrillosDia" value="<?php echo $row2['perinatal_cigarros_dia']; ?>">
                </div>
              </div> 
              <div class="col-lg-3">
                <div class="form-group mg-b-10-force">
                  <label class="form-control-label">Alcohol:</label>
                  <select class="form-control select2" name="alcohol"  > 
                  <option value="<?php echo $row2['perinatal_alcohol']; ?>"><?php echo $row2['perinatal_alcohol']; ?></option>  
                   <option value="No">No</option>                  
                    <option value="Si">Si</option>                                     
                 </select>
                 <label class="form-control-label">Drogas:</label>
                  <select class="form-control select2" name="drogas"  > 
                  <option value="<?php echo $row2['perinatal_drogas']; ?>"  ><?php echo $row2['perinatal_drogas']; ?></option>  
                   <option value="No">No</option>                  
                    <option value="Si">Si</option>                                     
                 </select>
                </div>
              </div> 
              <div class="col-lg-4">
                <div class="form-group mg-b-10-force">
                  <label class="form-control-label">Hozpitalización en embarazo:</label>
                  <input class="form-control" type="text" name="hozpitalizacion"  value="<?php echo $row2['perinatal_hozpitalizacion_embarazo']; ?>">
                </div>
              </div> 
              <div class="col-lg-4">
                <div class="form-group mg-b-10-force">
                  <label class="form-control-label">Lugar de traslado:</label>
                  <input class="form-control" type="text" name="lugarTraslado" value="<?php echo $row2['perinatal_lugar_traslado']; ?>">
                </div>
              </div> 
              <div class="col-lg-2">
                <div class="form-group mg-b-10-force">
                  <label class="form-control-label">Traslado:</label>
                  <select class="form-control select2" name="traslado"  >
                   <option value="<?php echo $row2['perinatal_traslado']; ?>"  ><?php echo $row2['perinatal_traslado']; ?></option>   
                   <option value="No">No</option>                  
                   <option value="Envío">Envío</option>   
                   <option value=Recepción>Recepción</option>                                    
                 </select> 
                </div>
              </div>  
              <div class="col-lg-2">
                <div class="form-group mg-b-10-force">
                  <label class="form-control-label">Ex. Clinico normal:</label>
                  <select class="form-control select2" name="exClinico"  > 
                   <option value="<?php echo $row2['perinatal_ex_clinico']; ?>"  ><?php echo $row2['perinatal_ex_clinico']; ?></option>  
                   <option value="No">No</option>                  
                    <option value="Si">Si</option>                                     
                 </select>  
                </div>
              </div>  
              <div class="col-lg-2">
                <div class="form-group mg-b-10-force">
                  <label class="form-control-label">Ex. Mamas normal:</label>
                  <select class="form-control select2" name="exMamas"  >  
                   <option value="<?php echo $row2['perinatal_ex_mamas']; ?>"  ><?php echo $row2['perinatal_ex_mamas']; ?></option> 
                   <option value="No">No</option>                  
                    <option value="Si">Si</option>                                     
                 </select>  
                </div>
              </div> 
              <div class="col-lg-2">
                <div class="form-group mg-b-10-force">
                  <label class="form-control-label">Ex. Odont. normal:</label>
                  <select class="form-control select2" name="exOdont"  >  
                   <option value="<?php echo $row2['perinatal_ex_odont']; ?>"  ><?php echo $row2['perinatal_ex_odont']; ?></option> 
                   <option value="No">No</option>                  
                    <option value="Si">Si</option>                                     
                 </select>  
                </div>
              </div> 
              <div class="col-lg-2">
                <div class="form-group mg-b-10-force">
                  <label class="form-control-label">Pelvis normal:</label>
                  <select class="form-control select2" name="pelvis"  >  
                   <option value="<?php echo $row2['perinatal_pelvis_normal']; ?>"  ><?php echo $row2['perinatal_pelvis_normal']; ?></option> 
                   <option value="No">No</option>                  
                    <option value="Si">Si</option>                                     
                 </select>  
                </div>
              </div> 
              <div class="col-lg-2">
                <div class="form-group mg-b-10-force">
                  <label class="form-control-label">Papanic. normal:</label>
                  <select class="form-control select2" name="papanic"  > 
                   <option value="<?php echo $row2['perinatal_papanic']; ?>"  ><?php echo $row2['perinatal_papanic']; ?></option>  
                   <option value="No">No</option>                  
                    <option value="Si">Si</option>                                     
                 </select>  
                </div>
              </div> 
              <div class="col-lg-2">
                <div class="form-group mg-b-10-force">
                  <label class="form-control-label">Colposcopia normal:</label>
                  <select class="form-control select2" name="colposcopia"  >  
                   <option value="<?php echo $row2['perinatal_colposcopia']; ?>"  ><?php echo $row2['perinatal_colposcopia']; ?></option> 
                   <option value="No">No</option>                  
                    <option value="Si">Si</option>                                     
                 </select>  
                </div>
              </div> 
              <div class="col-lg-2">
                <div class="form-group mg-b-10-force">
                  <label class="form-control-label">Cervix normal:</label>
                  <select class="form-control select2" name="cervix"  > 
                   <option value="<?php echo $row2['perinatal_cervix']; ?>"  ><?php echo $row2['perinatal_cervix']; ?></option>  
                   <option value="No">No</option>                  
                    <option value="Si">Si</option>                                     
                 </select>  
                </div>
              </div> 
              <div class="col-lg-2">
                <div class="form-group mg-b-10-force">
                  <label class="form-control-label">VDRL:</label>
                  <select class="form-control select2" name="vdrl"  >   
                     <option value="<?php echo $row2['perinatal_VDRL']; ?>"  ><?php echo $row2['perinatal_VDRL']; ?></option> 
                   <option value="+">+</option>                  
                    <option value="-">-</option>                                     
                 </select>  
                </div>
              </div> 
             <div class="col-lg-2">
                <div class="form-group mg-b-10-force">
                  <label class="form-control-label">Dia:</label>
                   <input class="form-control" type="text" name="vdrlDia" value="<?php echo $row2['perinatal_VDRL_dia']; ?>" >
                </div>
              </div> 
              <div class="col-lg-2">
                <div class="form-group mg-b-10-force">
                  <label class="form-control-label">Mes:</label>
                    <input class="form-control" type="text" name="vdrlMes" value="<?php echo $row2['perinatal_VDRL_mes']; ?>" >
                </div>
              </div> 
              <div class="col-lg-2">
                <div class="form-group mg-b-10-force">
                  <label class="form-control-label">VDRL°:</label>
                  <select class="form-control select2" name="vdrl2"  > 
                  <option value="<?php echo $row2['perinatal_VDRL2']; ?>"  ><?php echo $row2['perinatal_VDRL2']; ?></option>  
                   <option value="+">+</option>                  
                    <option value="-">-</option>                                     
                 </select>  
                </div>
              </div> 
              <div class="col-lg-2">
                <div class="form-group mg-b-10-force">
                  <label class="form-control-label">Dia:</label>
                   <input class="form-control" type="text" name="vdrlDia2" value="<?php echo $row2['perinatal_VDRL2_dia']; ?>">
                </div>
              </div> 
              <div class="col-lg-2">
                <div class="form-group mg-b-10-force">
                  <label class="form-control-label">Mes:</label>
                    <input class="form-control" type="text" name="vdrlMes2" value="<?php echo $row2['perinatal_VDRL_mes']; ?>">
                </div>
              </div>  
              <div class="col-lg-2">
                <div class="form-group mg-b-10-force">  
                  <label class="form-control-label">Hb:</label>
                  <select class="form-control select2" name="hb"  >   
                    <option value="<?php echo $row2['perinatal_Hb']; ?>"  ><?php echo $row2['perinatal_Hb']; ?></option> 
                   <option value="No">No</option>                  
                    <option value="Si">Si</option>                                           
                 </select>  
                </div>
              </div> 
              <div class="col-lg-2">
                <div class="form-group mg-b-10-force">
                  <label class="form-control-label">Dia:</label>
                   <input class="form-control" type="text" name="hbDia"  value="<?php echo $row2['perinatal_Hb_dia']; ?>">
                </div>
              </div> 
              <div class="col-lg-2">
                <div class="form-group mg-b-10-force">
                  <label class="form-control-label">Mes:</label>
                    <input class="form-control" type="text" name="hbMes" value="<?php echo $row2['perinatal_Hb_mes']; ?>">
                </div>
              </div> 
              <div class="col-lg-2">
                <div class="form-group mg-b-10-force">
                  <label class="form-control-label">Hb°:</label>
                  <select class="form-control select2" name="Hb2">   
                    <option value="<?php echo $row2['perinatal_Hb2']; ?>"  ><?php echo $row2['perinatal_Hb2']; ?></option> 
                   <option value="No">No</option>                  
                    <option value="Si">Si</option>                                           
                 </select>  
                </div>
              </div> 
              <div class="col-lg-2">
                <div class="form-group mg-b-10-force">
                  <label class="form-control-label">Dia:</label>
                   <input class="form-control" type="text" name="hbDia2"   value="<?php echo $row2['perinatal_Hb2_dia']; ?>" >
                </div>
              </div> 
              <div class="col-lg-2">
                <div class="form-group mg-b-10-force">
                  <label class="form-control-label">Mes:</label>
                    <input class="form-control" type="text" name="hbMes2"  value="<?php echo $row2['perinatal_Hb2_mes']; ?>" >
                </div>
              </div> 
             </form>


             <div class="col-lg-12">    
              <label class="section-title">Tabla</label>               
                 </div> 
<table class="table table-reference">
            <thead>
              <tr>
                <th  class="wd-15p">Fecha de la consulta</th>
                <th  >1</th>
                <th  >2</th>
                <th  >3</th>
                <th  >4</th>
                <th  >5</th>
                <th  >6</th>
                <th  >7</th>
                <th  >8</th>
                <th  >9</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Semanas de amenorrea </td>
                <td><input class="form-control" type="text" name="semanas1" value="<?php echo $row2['perinatal_semanas_amenorrea1']; ?>"></td>
                <td><input class="form-control" type="text" name="semanas2" value="<?php echo $row2['perinatal_semanas_amenorrea2']; ?>"></td>
                <td><input class="form-control" type="text" name="semanas3" value="<?php echo $row2['perinatal_semanas_amenorrea3']; ?>"></td>
                <td><input class="form-control" type="text" name="semanas4" value="<?php echo $row2['perinatal_semanas_amenorrea4']; ?>"></td>
                <td><input class="form-control" type="text" name="semanas5" value="<?php echo $row2['perinatal_semanas_amenorrea5']; ?>"></td>
                <td><input class="form-control" type="text" name="semanas6" value="<?php echo $row2['perinatal_semanas_amenorrea6']; ?>"></td>
                <td><input class="form-control" type="text" name="semanas7" value="<?php echo $row2['perinatal_semanas_amenorrea7']; ?>"></td>
                <td><input class="form-control" type="text" name="semanas8" value="<?php echo $row2['perinatal_semanas_amenorrea8']; ?>"></td>
                <td><input class="form-control" type="text" name="semanas9" value="<?php echo $row2['perinatal_semanas_amenorrea9']; ?>"></td>
              </tr>
              <tr>
                <td>Peso (kg) </td>
                <td><input class="form-control" type="text" name="peso1" value="<?php echo $row2['perinatal_peso1']; ?>"></td>
                <td><input class="form-control" type="text" name="peso2" value="<?php echo $row2['perinatal_peso2']; ?>"></td>
                <td><input class="form-control" type="text" name="peso3" value="<?php echo $row2['perinatal_peso3']; ?>"></td>
                <td><input class="form-control" type="text" name="peso4" value="<?php echo $row2['perinatal_peso4']; ?>"></td>
                <td><input class="form-control" type="text" name="peso5" value="<?php echo $row2['perinatal_peso5']; ?>"></td>
                <td><input class="form-control" type="text" name="peso6" value="<?php echo $row2['perinatal_peso6']; ?>"></td>
                <td><input class="form-control" type="text" name="peso7" value="<?php echo $row2['perinatal_peso7']; ?>"></td>
                <td><input class="form-control" type="text" name="peso8" value="<?php echo $row2['perinatal_peso8']; ?>"></td>
                <td><input class="form-control" type="text" name="peso9" value="<?php echo $row2['perinatal_peso9']; ?>"></td>
              </tr>
              <tr>
                <td>Tensión arterial m x/ min (mm Hg)</td>
                <td><input class="form-control" type="text" name="tension1" value="<?php echo $row2['perinatal_tension_arterial1']; ?>"></td>
                <td><input class="form-control" type="text" name="tension2" value="<?php echo $row2['perinatal_tension_arterial2']; ?>"></td>
                <td><input class="form-control" type="text" name="tension3" value="<?php echo $row2['perinatal_tension_arterial3']; ?>"></td>
                <td><input class="form-control" type="text" name="tension4" value="<?php echo $row2['perinatal_tension_arterial4']; ?>"></td>
                <td><input class="form-control" type="text" name="tension5" value="<?php echo $row2['perinatal_tension_arterial5']; ?>"></td>
                <td><input class="form-control" type="text" name="tension6" value="<?php echo $row2['perinatal_tension_arterial6']; ?>"></td>
                <td><input class="form-control" type="text" name="tension7" value="<?php echo $row2['perinatal_tension_arterial7']; ?>"></td>
                <td><input class="form-control" type="text" name="tension8" value="<?php echo $row2['perinatal_tension_arterial8']; ?>"></td>
                <td><input class="form-control" type="text" name="tension9" value="<?php echo $row2['perinatal_tension_arterial9']; ?>"></td>
              </tr>
              <tr>
                <td>Alt. uterina presen. pubis fondo Cef./Pelv./Tr.</td>
                <td><input class="form-control" type="text" name="uterina1" value="<?php echo $row2['perinatal_alt_uterina1']; ?>"></td>
                <td><input class="form-control" type="text" name="uterina2" value="<?php echo $row2['perinatal_alt_uterina2']; ?>"></td>
                <td><input class="form-control" type="text" name="uterina3" value="<?php echo $row2['perinatal_alt_uterina3']; ?>"></td>
                <td><input class="form-control" type="text" name="uterina4" value="<?php echo $row2['perinatal_alt_uterina4']; ?>"></td>
                <td><input class="form-control" type="text" name="uterina5" value="<?php echo $row2['perinatal_alt_uterina5']; ?>"></td>
                <td><input class="form-control" type="text" name="uterina6" value="<?php echo $row2['perinatal_alt_uterina6']; ?>"></td>
                <td><input class="form-control" type="text" name="uterina7" value="<?php echo $row2['perinatal_alt_uterina7']; ?>"></td>
                <td><input class="form-control" type="text" name="uterina8" value="<?php echo $row2['perinatal_alt_uterina8']; ?>"></td>
                <td><input class="form-control" type="text" name="uterina9" value="<?php echo $row2['perinatal_alt_uterina9']; ?>"></td>
              </tr>
              <tr>
                <td>F.C.F. (lat/min) mov. fetal</td>
                <td><input class="form-control" type="text" name="fcf1" value="<?php echo $row2['perinatal_FCF1']; ?>"></td>
                <td><input class="form-control" type="text" name="fcf2" value="<?php echo $row2['perinatal_FCF2']; ?>"></td>
                <td><input class="form-control" type="text" name="fcf3" value="<?php echo $row2['perinatal_FCF3']; ?>"></td>
                <td><input class="form-control" type="text" name="fcf4" value="<?php echo $row2['perinatal_FCF4']; ?>"></td>
                <td><input class="form-control" type="text" name="fcf5" value="<?php echo $row2['perinatal_FCF5']; ?>"></td>
                <td><input class="form-control" type="text" name="fcf6" value="<?php echo $row2['perinatal_FCF6']; ?>"></td>
                <td><input class="form-control" type="text" name="fcf7" value="<?php echo $row2['perinatal_FCF7']; ?>"></td>
                <td><input class="form-control" type="text" name="fcf8" value="<?php echo $row2['perinatal_FCF8']; ?>"></td>
                <td><input class="form-control" type="text" name="fcf9" value="<?php echo $row2['perinatal_FCF9']; ?>"></td>
              </tr>
            </tbody>
          </table>
              
          
              </div><!-- row -->
              <div class="form-layout-footer">
              <button type="submit" class="btn btn-primary bd-0">Guardar</button>
              <button type="s"  class="btn btn-secondary bd-0" role="link" onclick="window.location='index.php';return false;">Cancel</button>
              <button class="btn btn-outline-danger" role="link" onclick="window.location='index.php';return false;"><i class="fa fa-print"></i> Generar PDF</button>
            </div><!-- form-layout-footer -->
            </div><!-- form-layout -->
        </div><!-- section-wrapper -->

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