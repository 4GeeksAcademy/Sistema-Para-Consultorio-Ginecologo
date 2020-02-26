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
            <li class="breadcrumb-item active" aria-current="page">Modificar Paciente</li>
          </ol>
          <h6 class="slim-pagetitle">Modificar datos de paciente</h6>
        </div><!-- slim-pageheader -->
 
 <?php
        include("Model/database.php");
        $paciente_id=$_REQUEST['idpaciente'];
        $pdo = Database::connect();
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $query= "SELECT * FROM tbpacientes where paciente_id=?";
        //$sql = "SELECT * FROM customers where id = ?";
        $q = $pdo->prepare($query);
        $q->execute(array($paciente_id));
        $row = $q->fetch(PDO::FETCH_ASSOC);
        Database::disconnect();
          ?>
  <form action="Model/modificarPaciente.php?idpaciente=<?php echo $paciente_id?>" method="POST"> 
        <div class="section-wrapper">
          <label class="section-title">FICHA DE INDENTIFICACIÓN</label>        
          <div class="form-layout">
            <div class="row mg-b-25">                    
              <div class="col-lg-4">
                <div class="form-group">
                   <i class="icon ion-person tx-16 lh-0 op-6"></i>  
                  <label class="form-control-label">Nombre de la paciente: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="nombre"  value="<?php echo $row['paciente_nombre']; ?>"  placeholder=" ">
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-2">
                <div class="form-group">
                  <label class="form-control-label">Edad: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="edad"   value="<?php echo $row['paciente_edad']; ?>" placeholder=" ">
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-3">
                <div class="form-group">
                  <i class="fa fa-birthday-cake tx-16 lh-0 op-6"></i> 
                  <label class="form-control-label">Fecha de nacimiento: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="date" name="hb"  value="<?php echo $row['paciente_hb']; ?>"  placeholder=" ">
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-3">
                <div class="form-group">
                   <i class="fa fa-phone tx-16 lh-0 op-6"></i>
                  <label class="form-control-label">Telefono: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="telefono"   value="<?php echo $row['paciente_telefono']; ?>"  placeholder=" ">
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-7">
                <div class="form-group">
                  <label class="form-control-label">Dirección: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="direccion"  value="<?php echo $row['paciente_domicilio']; ?>"   placeholder=" ">
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-2">
                <div class="form-group">
                  <label class="form-control-label">Codigo Postal: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="cp"   value="<?php echo $row['paciente_codigo_postal']; ?>"  placeholder=" ">
                </div>
              </div><!-- col-4 -->
              
              <div class="col-lg-3">
                <div class="form-group">
                  <label class="form-control-label">Estado Civil: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="estadoC"  value="<?php echo $row['paciente_estado_civil']; ?>"   placeholder=" ">
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-6">
                <div class="form-group">
                  <label class="form-control-label">Ocupación: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="ocupacion"  value="<?php echo $row['paciente_ocupacion']; ?>"  placeholder=" ">
                </div>
              </div><!-- col-4 -->              

              </div><!-- row -->
              <div class="form-layout-footer">
              <button type="submit" class="btn btn-primary bd-0">Guardar</button>
              <button type="s"  class="btn btn-secondary bd-0" role="link" onclick="window.location='index.php';return false;">Cancel</button>
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
