<!DOCTYPE html>
<html lang="en">
  <head>
   
    <!-- Meta -->
    <meta name="description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="author" content="ThemePixels">

    <title>Sistema Para Consultorio Ginecólogo</title>

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
            <li class="breadcrumb-item"><a href="#">Inicio</a></li>
            <li class="breadcrumb-item"><a href="#">Pacientes</a></li>
          </ol>
          <h6 class="slim-pagetitle">Pacientes</h6>
        </div><!-- slim-pageheader -->

        <div class="section-wrapper">
          <label class="section-title">Lista de pacientes</label>
          <p class="mg-b-20 mg-sm-b-40">Información básica, Historia Clínica, Colposcopia, Perinatal y Recetas médicas.</p>
             
          <div class="table-wrapper">
            <table id="datatable1" class="table display responsive nowrap">
              <thead>
                <tr>
                  <th class="wd-10p"> <i class="icon ion-person tx-16 lh-0 op-6"></i> Nombre</th>
                  <th class="wd-10p">Edad</th>
                  <th class="wd-10p">Fecha Nacimiento</th>
                  <th class="wd-10p">Telefono</th>
                  <th class="wd-10p">Domicilio</th>
                  <th class="wd-10p">Codigo Postal</th>
                  <th class="wd-1p">Estado Civil</th>
                  <th class="wd-10">Ocupación</th>
                  <th class="wd-10p">Modificar</th>
                  <th class="wd-10p">Eliminar</th>
                  <th  >Historia Clínica</th>
                  <th  >Colposcopia</th>
                  <th  >Perinatal</th>
                  <th   >Recetas Medicas</th>
                </tr>
              </thead>
   <tbody>
                  <?php
      include("Model/database.php");
      $pdo = Database::connect();
      $query= "SELECT * FROM tbpacientes";
      //$resultados= $conexion->query($query);
      //while ($row=$resultados->fetch_assoc()) {
        foreach ($pdo->query($query) as $row) {
        ?>    
           
                 <tr>
        <td><?php echo $row['paciente_nombre']; ?> </td>
        <td><?php echo $row['paciente_edad']; ?> </td>
        <td><?php echo $row['paciente_hb']; ?> </td>
        <td><?php echo $row['paciente_telefono']; ?> </td>
        <td><?php echo $row['paciente_domicilio']; ?> </td>
        <td><?php echo $row['paciente_codigo_postal']; ?> </td>
        <td><?php echo $row['paciente_estado_civil']; ?> </td>
        <td><?php echo $row['paciente_ocupacion']; ?> </td>      
        <td><a href="formularioModificarPaciente.php?idpaciente=<?php echo $row['paciente_id']; ?>">Modificar</a></td>
        <td><a href="#modaldemo<?php echo $row['paciente_id']; ?>"  data-toggle="modal" data-effect="effect-scale"> <div style="text-align: center; "><i class="icon ion-trash-a tx-16 lh-0 op-6"></i></div></a></td>
        <td><a href= "formularioHistoriaClinica.php?idpaciente=<?php echo $row['paciente_id']; ?>">Editar</a></td>
        <td><a href= "formularioColposcopia.php?idpaciente=<?php echo $row['paciente_id']; ?>">Editar</a></td>
        <td><a href= "formularioPerinatal.php?idpaciente=<?php echo $row['paciente_id']; ?>">Editar</a></td>
        <td><a href= "tbRecetasMedicas.php?idpaciente=<?php echo $row['paciente_id']; ?>">Ver</a></td>

<div id="modaldemo<?php echo $row['paciente_id']; ?>" class="modal fade"><!-- Alert -->
      <div class="modal-dialog modal-dialog-vertical-center" role="document">
        <div class="modal-content bd-0 tx-14">
          <div class="modal-header pd-y-20 pd-x-25">
            <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Confirmar eliminacion de paciente</h6>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body pd-25">
            <h7 class="lh-3 mg-b-20 tx-inverse">¿Está seguro que desea eliminar el paciente <?php echo $row['paciente_nombre']; ?> ?</h7>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-primary" role="link" onclick="window.location='Model/eliminarPaciente.php?idpaciente=<?php echo $row['paciente_id']; ?>'">Eliminar <i class="icon ion-trash-a tx-16 lh-0 op-6"></i></button>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
          </div>
        </div>
      </div><!-- modal-dialog -->
    </div><!-- Alert -->

      </tr>
      <?php } ?>
              </tbody>
            </table>
          </div><!-- table-wrapper -->
        </br>
           <div style="text-align: right; ">
          <button class="btn btn-primary bd-0"role="link" onclick="window.location='formularioPaciente.php'">Agregar nuevo paciente</button>           
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
        <script>
      $(function(){

        // showing modal with effect
        $('.modal-effect').on('click', function(e){
          e.preventDefault();
          var effect = $(this).attr('data-effect');
          $('#modaldemo8').addClass(effect);
        });

        // hide modal with effect
        $('#modaldemo8').on('hidden.bs.modal', function (e) {
          $(this).removeClass (function (index, className) {
              return (className.match (/(^|\s)effect-\S+/g) || []).join(' ');
          });
        });
      });
    </script>
 
  </body>
</html>
