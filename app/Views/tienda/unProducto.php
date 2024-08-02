<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Mini Market</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url('/public/');?>plugins/fontawesome-free/css/all.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo base_url('/public/');?>plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="<?php echo base_url('/public/');?>plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="<?php echo base_url('/public/');?>plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="<?php echo base_url('/public/');?>plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo base_url('/public/');?>plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="<?php echo base_url('/public/');?>plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url('/public/');?>dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="<?php echo base_url('/public/');?>plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?php echo base_url('/public/');?>plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="<?php echo base_url('/public/');?>plugins/summernote/summernote-bs4.min.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="<?php echo base_url('/public/');?>dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div>
  <!-- Content Wrapper. Contains page content -->
  <div class="content">
    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card card-solid">
        <div class="card-body">
          <div class="row">
            <div class="col-12 col-sm-6">
              <h3 class="d-inline-block d-sm-none"><?php echo $datosProd[0]['nombre'];?></h3>
              <div class="col-12">
                <img src="<?php echo $datosProd[0]['imagen'];?>" class="product-image" alt="Product Image">
              </div>
            </div>
            <div class="col-12 col-sm-6">
              <h3 class="my-3"><?php echo $datosProd[0]['nombre'];?></h3>
              <hr>

                <h4 class="mt-3">Código</h4>
                <div class="btn-group btn-group-toggle" data-toggle="buttons">
                <label class="btn btn-default text-center">
                    <input type="radio" name="color_option" id="color_option_b1" autocomplete="off">
                    <?php echo $datosProd[0]['codigo'];?>
                </label>
                </div>

                <h4 class="mt-3">Marca</h4>
                <div class="btn-group btn-group-toggle" data-toggle="buttons">
                <label class="btn btn-default text-center">
                    <input type="radio" name="color_option" id="color_option_b1" autocomplete="off">
                    <?php echo $datosProd[0]['marca'];?>
                </label>
                </div>

                <h4 class="mt-3">Tipo</h4>
                <div class="btn-group btn-group-toggle" data-toggle="buttons">
                <label class="btn btn-default text-center">
                    <input type="radio" name="color_option" id="color_option_b1" autocomplete="off">
                    <?php echo $datosProd[0]['tipo'];?>
                </label>
                </div>

                <h4 class="mt-3">Grupo</h4>
                <div class="btn-group btn-group-toggle" data-toggle="buttons">
                <label class="btn btn-default text-center">
                    <input type="radio" name="color_option" id="color_option_b1" autocomplete="off">
                    <?php echo $datosProd[0]['grupo'];?>
                </label>
                </div>

                <h4 class="mt-3">Peso</h4>
                <div class="btn-group btn-group-toggle" data-toggle="buttons">
                <label class="btn btn-default text-center">
                    <input type="radio" name="color_option" id="color_option_b1" autocomplete="off">
                    <?php echo $datosProd[0]['peso'];?>
                </label>
                </div>

              <div class="bg-gray py-2 px-3 mt-4">
                <h2 class="mb-0">
                  Precio Unidad: $<?php echo $datosProd[0]['precio_unidad'];?>
                </h2>
              </div>

              <div class="mt-12">
                <a href="<?php echo base_url('compra/').$datosProd[0]['id'];?>" class="btn btn-primary btn-lg btn-flat" data-id="<?php echo $datosProd[0]['id'];?>">
                  <i class="fas fa-cart-plus fa-lg mr-2"></i>
                  Comprar
                </a>
              </div>

            </div>
          </div>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.2.0
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
<!--
MODALS
-->

<!--
FIN MODALS
-->
<!-- jQuery -->
<script src="<?php echo base_url('/public/');?>plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?php echo base_url('/public/');?>plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url('/public/');?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="<?php echo base_url('/public/');?>plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="<?php echo base_url('/public/');?>plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="<?php echo base_url('/public/');?>plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="<?php echo base_url('/public/');?>plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="<?php echo base_url('/public/');?>plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="<?php echo base_url('/public/');?>plugins/moment/moment.min.js"></script>
<script src="<?php echo base_url('/public/');?>plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="<?php echo base_url('/public/');?>plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="<?php echo base_url('/public/');?>plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="<?php echo base_url('/public/');?>plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>


<!-- DataTables  & Plugins -->
<script src="<?php echo base_url('/public/');?>plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url('/public/');?>plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?php echo base_url('/public/');?>plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?php echo base_url('/public/');?>plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="<?php echo base_url('/public/');?>plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="<?php echo base_url('/public/');?>plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="<?php echo base_url('/public/');?>plugins/jszip/jszip.min.js"></script>
<script src="<?php echo base_url('/public/');?>plugins/pdfmake/pdfmake.min.js"></script>
<script src="<?php echo base_url('/public/');?>plugins/pdfmake/vfs_fonts.js"></script>
<script src="<?php echo base_url('/public/');?>plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="<?php echo base_url('/public/');?>plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="<?php echo base_url('/public/');?>plugins/datatables-buttons/js/buttons.colVis.min.js"></script>

<!-- AdminLTE App -->
<script src="<?php echo base_url('/public/');?>dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php echo base_url('/public/');?>dist/js/pages/dashboard.js"></script>
<!-- Page specific script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["excel", "pdf","colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
<!-- Page specific script -->
<script>
  window.onload = function() {
    $('#modal-overlay').on('shown.bs.modal', function (event) {
      var elemento = this;
      $.ajax({
            url: '<?php echo base_url("productos/aProduct") ?>',
            data: {
                busqueda: $(event.relatedTarget).data('id')
            },
            type: 'POST',
            dataType: 'json',
            success: function(response) {
                if (response.status == 1) {
                    //alert(response.prod);
                    $(elemento).find('.overlay').css('display','none');
                    $('#modal-overlay').find("#nombre_prod").html(response.datosProd[0].nombre_prod);
                    $('#modal-overlay').find("#link").attr("href" , response.datosProd[0].link);
                    $('#inputImage').attr('src',response.datosProd[0].imagen);
                    $('#id').val(response.datosProd[0].id);
                    $('#codigo').val(response.datosProd[0].codigo);
                    $('#nombre').val(response.datosProd[0].nombre);
                    $('#marca').val(response.datosProd[0].marca);
                    $('#tipo').val(response.datosProd[0].tipo);
                    $('#grupo').val(response.datosProd[0].grupo);
                    $('#peso').val(response.datosProd[0].peso);
                    $('#precio_unidad').val(response.datosProd[0].precio_unidad);
                    $('#stock').val(response.datosProd[0].stock);
                } else if(response.status == 0) {
                    Toast.fire({
                      icon: 'error',
                      title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
                    });
                }
            },
            error: function(xhr, status) {
                alert('Existió un problema al procesar la solicitud. ' + status + xhr);
            }
        });
    });

    $('#modal-overlay').on('hide.bs.modal', function (event) {
      $(this).find('.overlay').css('display','flex');
      $('#inputImage').attr('src','<?php echo base_url('/public/');?>dist/img/productos.jpg');
    });

    $('#modificar').click(function(){
      $.ajax({
            url: '<?php echo base_url("productos/modif") ?>',
            data: $( "#producto" ).serialize(),
            type: 'POST',
            dataType: 'json',
            success: function(response) {
                if (response.status == 1) {
                  console.log(response);
                  window.location.reload();
                } else if(response.status == 0) {
                    Toast.fire({
                      icon: 'error',
                      title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
                    });
                }
            },
            error: function(xhr, status) {
                alert('Existió un problema al procesar la solicitud. ' + status + xhr);
            }
        });
    });

    $('#producto-alta').on('shown.bs.modal', function (event) {
      var elemento = this;
      $(elemento).find('.overlay').css('display','none');
    });

    $('#producto-alta').on('hide.bs.modal', function (event) {
      $(this).find('.overlay').css('display','flex');
    });

    $('#nuevo').click(function(){
      $.ajax({
            url: '<?php echo base_url("productos/nuevo") ?>',
            data: $( "#form-alta" ).serialize(),
            type: 'POST',
            dataType: 'json',
            success: function(response) {
                if (response.status == 1) {
                  console.log(response);
                  //window.location.reload();
                } else if(response.status == 0) {
                    Toast.fire({
                      icon: 'error',
                      title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
                    });
                }
            },
            error: function(xhr, status) {
                alert('Existió un problema al procesar la solicitud. ' + status + xhr);
            }
        });
    });
  }
</script>
</body>
</html>
