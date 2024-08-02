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

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index3.html" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>

      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-comments"></i>
          <span class="badge badge-danger navbar-badge">3</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="<?php echo base_url('/public/');?>dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Brad Diesel
                  <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">Call me whenever you can...</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="<?php echo base_url('/public/');?>dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  John Pierce
                  <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">I got your message bro</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="<?php echo base_url('/public/');?>dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Nora Silvester
                  <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">The subject goes here</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
        </div>
      </li>
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-controlsidebar-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="<?php echo base_url('/public/');?>dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?php echo base_url('/public/');?>dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Alexander Pierce</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-circle"></i>
              <p>
                Productos
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link" data-toggle="modal" data-target="#producto-alta">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Alta</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="pages/widgets.html" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Ventas
                <!--<span class="right badge badge-danger">New</span>-->
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url('/salir');?>" class="nav-link">
              <i class="nav-icon far fa-circle text-info"></i>
              <p>Salir</p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>150</h3>

                <p>New Orders</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>53<sup style="font-size: 20px">%</sup></h3>

                <p>Bounce Rate</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>44</h3>

                <p>User Registrations</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>65</h3>

                <p>Unique Visitors</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
          <!-- Main content -->
          <section class="content">
            <div class="container-fluid">
              <div class="row">
                <div class="col-12">
                  <div class="card">
                    <div class="card-header">
                      <h3 class="card-title">DataTable with default features</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                      <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                          <th>Código</th>
                          <th>Nombre</th>
                          <th>Marca</th>
                          <th>Tipo</th>
                          <th>Grupo</th>
                          <th>Peso</th>
                          <th>Precio Unidad</th>
                          <th>Acción</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($productos as $r) { ?>
                          <tr>
                            <td><?php echo $r["codigo"] ?></td>
                            <td><?php echo $r["nombre"] ?></td>
                            <td><?php echo $r["marca"] ?></td>
                            <td><?php echo $r["tipo"] ?></td>
                            <td><?php echo $r["grupo"] ?></td>
                            <td><?php echo $r["peso"] ?></td>
                            <td><?php echo $r["precio_unidad"] ?></td>
                            <td>
                              <button 
                              type="button" 
                              class="btn btn-block btn-success" 
                              data-id="<?php echo $r["id"] ?>"
                              data-toggle="modal"
                              data-target="#modal-overlay"
                              >Editar</button>
                            </td>
                          </tr>
                        <?php } ?>
                        </tbody>
                        <tfoot>
                        <tr>
                          <th>Código</th>
                          <th>Nombre</th>
                          <th>Marca</th>
                          <th>Tipo</th>
                          <th>Grupo</th>
                          <th>Peso</th>
                          <th>Precio Unidad</th>
                          <th>Acción</th>
                        </tr>
                        </tfoot>
                      </table>
                    </div>
                    <!-- /.card-body -->
                  </div>
                  <!-- /.card -->
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
          </section>
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

<div class="modal fade" id="modal-overlay">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="overlay">
          <i class="fas fa-2x fa-sync fa-spin"></i>
      </div>
      <div class="modal-header">
        <h4 class="modal-title">Producto</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="card card-primary card-outline">
        <div class="card-body box-profile">



        <form id='producto' action='<?php echo base_url('')?>' method='POST'>
          <input type="hidden" id="status" name="status" class="form-control" value="1" />

          <!-- Default box -->
          <div class="card">
            <div class="card-body row">
              <div class="col-5 text-center d-flex align-items-center justify-content-center">
                <img id="inputImage" src="<?php echo base_url('/public/');?>dist/img/productos.jpg" alt="Producto" class="img-circle img-fluid">
              </div>
              <input type="hidden" id="id" name="id" class="form-control" />
              <div class="col-7">
                <div class="form-group">
                  <label for="codigo">Código</label>
                  <input type="text" id="codigo" name="codigo" class="form-control" />
                </div>
                <div class="form-group">
                  <label for="nombre">Nombre</label>
                  <input type="text" id="nombre" name="nombre" class="form-control" />
                </div>
                <div class="form-group">
                  <label for="marca">Marca</label>
                  <input type="text" id="marca" name="marca" class="form-control" />
                </div>
                <div class="form-group">
                  <label for="tipo">Tipo</label>
                  <input type="text" id="tipo" name="tipo" class="form-control" />
                </div>
                <div class="form-group">
                  <label for="grupo">Grupo</label>
                  <input type="text" id="grupo" name="grupo" class="form-control" />
                </div>
                <div class="form-group">
                  <label for="peso">Peso</label>
                  <input type="text" id="peso" name="peso" class="form-control" />
                </div>
                <div class="form-group">
                  <label for="precio_unidad">Precio Unidad</label>
                  <input type="text" id="precio_unidad" name="precio_unidad" class="form-control" />
                </div>
                <div class="form-group">
                  <label for="stock">Stock</label>
                  <input type="text" id="stock" name="stock" class="form-control" />
                </div>
              </div>
            </div>
          </div>
          </form>
        </div>
        <!-- /.card-body -->
      </div>
      </div>
      <div class="modal-footer justify-content-between">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary" data-dismiss="modal" id="modificar">Guardar</button>
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>

<div class="modal fade" id="producto-alta">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="overlay">
          <i class="fas fa-2x fa-sync fa-spin"></i>
      </div>
      <div class="modal-header">
        <h4 class="modal-title">Nuevo Producto</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="card card-primary card-outline">
        <div class="card-body box-profile">



        <form id='form-alta' action='<?php echo base_url('')?>' method='POST'>
          <input type="hidden" id="status" name="status" class="form-control" value="1" />
          <!-- Default box -->
          <div class="card">
            <div class="card-body row">
              <div class="col-12">
                <div class="form-group">
                  <label for="codigo">Código</label>
                  <input type="text" id="codigo" name="codigo" class="form-control" />
                </div>
                <div class="form-group">
                  <label for="nombre">Nombre</label>
                  <input type="text" id="nombre" name="nombre" class="form-control" />
                </div>
                <div class="form-group">
                  <label for="marca">Marca</label>
                  <input type="text" id="marca" name="marca" class="form-control" />
                </div>
                <div class="form-group">
                  <label for="tipo">Tipo</label>
                  <input type="text" id="tipo" name="tipo" class="form-control" />
                </div>
                <div class="form-group">
                  <label for="grupo">Grupo</label>
                  <input type="text" id="grupo" name="grupo" class="form-control" />
                </div>
                <div class="form-group">
                  <label for="peso">Peso</label>
                  <input type="text" id="peso" name="peso" class="form-control" />
                </div>
                <div class="form-group">
                  <label for="precio_unidad">Precio Unidad</label>
                  <input type="text" id="precio_unidad" name="precio_unidad" class="form-control" />
                </div>
                <div class="form-group">
                  <label for="stock">Stock</label>
                  <input type="text" id="stock" name="stock" class="form-control" />
                </div>
                <div class="form-group">
                  <label for="imagen">Link de imagen</label>
                  <input type="text" id="stock" name="imagen" class="form-control" />
                </div>
              </div>
            </div>
          </div>
          </form>
        </div>
        <!-- /.card-body -->
      </div>
      </div>
      <div class="modal-footer justify-content-between">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary" data-dismiss="modal" id="nuevo">Guardar</button>
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
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
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url('/public/');?>dist/js/demo.js"></script>
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
