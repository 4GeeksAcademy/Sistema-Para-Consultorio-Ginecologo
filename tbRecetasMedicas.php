<!DOCTYPE html>
<html lang="en">
  <head>
    
    <title>Sistema Para Consultorio Ginecólogoe</title>

    <!-- vendor css -->
    <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="lib/Ionicons/css/ionicons.css" rel="stylesheet">
    <link href="lib/datatables/css/jquery.dataTables.css" rel="stylesheet">
    <link href="lib/select2/css/select2.min.css" rel="stylesheet">

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
            <li class="breadcrumb-item"><a href="#">Recetas Médicas</a></li>

          </ol>
          <h6 class="slim-pagetitle">Recetas Médicas</h6>
        </div><!-- slim-pageheader -->

        <div class="section-wrapper">
          <label class="section-title">Listado de Recetas Medicas</label>
          <p class="mg-b-20 mg-sm-b-40">Agregar, borrar o eliminar Receta Médica</p>

          <div class="table-wrapper">
            <table id="datatable1" class="table display responsive nowrap">
              <thead>
                <tr>
                  <th class="wd-8p"><i class="icon ion-person tx-16 lh-0 op-6"></i> Nombre del paciente</th>
                  <th class="wd-10p">Fecha </th>
                  <th class="wd-60p">Indicaciones</th>
                  <th class="wd-10p">Modificar</th>
                  <th class="wd-10p">Eliminar</th>
                </tr>
              </thead>
   <tbody>
                  <?php
      include("Model/database.php");
      $paciente_id=$_REQUEST['idpaciente']; 
      $query= "SELECT * FROM tbrecetas_medicas INNER JOIN tbpacientes ON tbrecetas_medicas.paciente_id = tbpacientes.paciente_id WHERE tbpacientes.paciente_id=".$paciente_id;
      $pdo = Database::connect();
      foreach ($pdo->query($query) as $row) {
        ?>               
        <tr>
        <td><?php echo $row['paciente_nombre']; ?> </td>
        <td><?php echo $row['receta_medica_fecha']; ?> </td>
        <td><?php echo $row['receta_medica_indicaciones']; ?> </td>    
        <td><a href="formularioModificarRecetaMedica.php?idpaciente=<?php echo $paciente_id?>&idRecetaMedica=<?php echo $row['receta_medica_id'];?>">Modificar</a></td>
        <td><a href="Model/eliminarRecetaMedica.php?idpaciente=<?php echo $paciente_id?>&idRecetaMedica=<?php echo $row['receta_medica_id'];?>"><div style="text-align: center; "><i class="icon ion-trash-a tx-16 lh-0 op-6"></i></div></a></td>
      </tr>
      <?php  Database::disconnect(); } ?>
              </tbody>
            </table>
          </div><!-- table-wrapper -->
        </br>
           <div style="text-align: right; ">
          <button class="btn btn-primary bd-0"role="link" onclick="window.location='formularioRecetaMedica.php?idpaciente=<?php echo $paciente_id ?>'">Agregar nueva receta médica</button>
         </div>
        </div><!-- section-wrapper -->

      </div><!-- container -->
    </div><!-- slim-mainpanel -->

    <div class="slim-footer">
      <?php include 'footer.php';?>
    </div><!-- slim-footer -->

    <script src="lib/jquery/js/jquery.js"></script>
    <script src="lib/popper.js/js/popper.js"></script>
    <script src="lib/bootstrap/js/bootstrap.js"></script>
    <script src="lib/jquery.cookie/js/jquery.cookie.js"></script>
    <script src="lib/datatables/js/jquery.dataTables.js"></script>
    <script src="lib/datatables-responsive/js/dataTables.responsive.js"></script>
    <script src="lib/select2/js/select2.min.js"></script>

    <script src="js/slim.js"></script>
    <script>
      $(function(){
        'use strict';

        $('#datatable1').DataTable({
          responsive: true,
          language: {
            searchPlaceholder: 'Search...',
            sSearch: '',
            lengthMenu: '_MENU_ items/page',
          }
        });

        $('#datatable2').DataTable({
          bLengthChange: false,
          searching: false,
          responsive: true
        });

        // Select2
        $('.dataTables_length select').select2({ minimumResultsForSearch: Infinity });

      });
    </script>
  </body>
</html>
