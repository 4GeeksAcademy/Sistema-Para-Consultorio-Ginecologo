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
            <li class="breadcrumb-item  " aria-current="page">Receta Medica</li>
            <li class="breadcrumb-item active" aria-current="page">Agregar Receta Medica</li>
          </ol>
          <h6 class="slim-pagetitle">Agregar Receta Medica</h6>
        </div><!-- slim-pageheader -->
        <?php
      $paciente_id=$_REQUEST['idpaciente']; 
        ?>
  <form action="Model/agregarRecetaMedica.php?idpaciente=<?php echo $paciente_id ?>" method="POST"> 
        <div class="section-wrapper">
          <label class="section-title">FICHA DE INDENTIFICACIÓN</label>
      <?php
      include("Model/database.php");
      $query= "SELECT * FROM tbpacientes WHERE paciente_id=?";
      $pdo = Database::connect();
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $q = $pdo->prepare($query);
        $q->execute(array($paciente_id));
        $row = $q->fetch(PDO::FETCH_ASSOC);
        ?> 
          <div class="form-layout">
            <div class="row mg-b-25">
              
              <div class="col-lg-7">
                <div class="form-group">
                   <i class="icon ion-person tx-16 lh-0 op-6"></i>  
                  <label class="form-control-label">Nombre del paciente: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text  " name="nombre"  value="<?php echo $row['paciente_nombre']; ?>"  placeholder=" " readonly="readonly">
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-5">
                <div class="form-group">
                  <i class="fa fa-calendar tx-16 lh-0 op-6"></i>  
                  <label class="form-control-label">Fecha: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="date" name="fecha"   placeholder=" ">
                </div>
              </div>
                
              <div class="col-lg-12"> 
                <div class="form-group">     
              <label class="section-title">Indicaciones:</label>   
              <textarea rows="5" class="form-control" name="indicaciones"  placeholder=" "></textarea>             
                 </div><!-- col-4 -->          
              </div><!-- form-layout -->              

              </div><!-- row -->
              <div class="form-layout-footer">
              <button type="submit" class="btn btn-primary bd-0">Guardar</button>
              <button type="s"  class="btn btn-secondary bd-0" role="link" onclick="window.location='tbRecetasMedicas.php?idpaciente=<?php echo $row['paciente_id']; ?>' ;return false;">Cancel</button>
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
