<!DOCTYPE html>
<html class="no-js css-menubar" lang="en">
<head>
  <meta charset="utf-8">
  <meta charset="utf-8">
  <meta name="_token" content="jiSrP9zvKU7sXDIl1BPSlpSOZbj7Ifup9JAHGz5O">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>@yield('titulo','POESE') | SEGURIDAD DE LA NACION </title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">

   <!-- Stylesheets -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" >
  <link href='https://api.mapbox.com/mapbox.js/v3.1.1/mapbox.css' rel='stylesheet'>
  <link rel="stylesheet" href="http://leaflet.github.io/Leaflet.draw/src/leaflet.draw.css"/>

  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset("assets/$theme/plugins/fontawesome-free/css/all.min.css")}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="{{asset("assets/$theme/Ionicons/css/ionicons.min.css")}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset("assets/$theme/dist/css/adminlte.min.css")}}">
  <!-- DataTables -->
  <link rel="stylesheet" href="{{asset("assets/$theme/plugins/datatables-bs4/css/dataTables.bootstrap4.css")}}">
  <!-- Script de capa base de la georeferencia-->

  <link rel="canonical" href="https://getbootstrap.com/docs/4.4/examples/navbar-static/">

    <!-- Bootstrap core CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" >


  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
   <!-- estilos unicos de contenidos -->
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset("assets/$theme/font-awesome/css/font-awesome.min.css")}}">
   
   @yield("styles")

   <!--/ estilos unicos de contenidos -->
  
  <link rel="stylesheet" href="{{asset("assets/css/custom.css")}}">

 

  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini layout-footer-fixed">
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a href="{{route('logout')}}">
          <button type="button" class="btn btn-danger btn-sm">
             Cerrar Sección 
          </button>
        </a>
      </li>
    </ul>
  </nav>
     <!-- contenido -->

     @include("theme/$theme/menu")
    
     <!-- contenido -->


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>@yield('titulocontenido', 'POESE') </h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- contenido -->

    @yield('contenido')
    
    <!-- contenido -->
  </div>
  <!-- /.content-wrapper -->

   <!-- footer -->


   @include("theme/$theme/footer")



   <!--/ footer -->

  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{asset("assets/$theme/plugins/jquery/jquery.min.js")}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset("assets/$theme/plugins/bootstrap/js/bootstrap.bundle.min.js")}}"></script>
<!-- DataTables -->
<script src="{{asset("assets/$theme/plugins/datatables/jquery.dataTables.js")}}"></script>
<script src="{{asset("assets/$theme/plugins/datatables-bs4/js/dataTables.bootstrap4.js")}}"></script>
<!-- AdminLTE App -->
<script src="{{asset("assets/$theme/dist/js/adminlte.min.js")}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset("assets/$theme/dist/js/demo.js")}}"></script>
<!-- Script de capa base de la georeferencia-->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <script src='https://api.mapbox.com/mapbox.js/v3.1.1/mapbox.js'></script>

    <script src='https://api.mapbox.com/mapbox.js/plugins/leaflet-omnivore/v0.2.0/leaflet-omnivore.min.js'></script>

    <!--<script src="https://leaflet.github.io/Leaflet.draw/docs/examples/libs/leaflet-src.js"></script>-->
    <script src="http://leaflet.github.io/Leaflet.draw/src/Leaflet.draw.js"></script>
    <script src="http://leaflet.github.io/Leaflet.draw/src/Leaflet.Draw.Event.js"></script>
    <script src="http://leaflet.github.io/Leaflet.draw/src/Toolbar.js"></script>
    <script src="http://leaflet.github.io/Leaflet.draw/src/Tooltip.js"></script>
    <script src="http://leaflet.github.io/Leaflet.draw/src/ext/GeometryUtil.js"></script>
    <script src="http://leaflet.github.io/Leaflet.draw/src/ext/LatLngUtil.js"></script>
    <script src="http://leaflet.github.io/Leaflet.draw/src/ext/LineUtil.Intersect.js"></script>
    <script src="http://leaflet.github.io/Leaflet.draw/src/ext/Polygon.Intersect.js"></script>
    <script src="http://leaflet.github.io/Leaflet.draw/src/ext/Polyline.Intersect.js"></script>
    <script src="http://leaflet.github.io/Leaflet.draw/src/ext/TouchEvents.js"></script>
    <script src="http://leaflet.github.io/Leaflet.draw/src/draw/DrawToolbar.js"></script>
    <script src="http://leaflet.github.io/Leaflet.draw/src/draw/handler/Draw.Feature.js"></script>
    <script src="http://leaflet.github.io/Leaflet.draw/src/draw/handler/Draw.SimpleShape.js"></script>
    <script src="http://leaflet.github.io/Leaflet.draw/src/draw/handler/Draw.Polyline.js"></script>
    <script src="http://leaflet.github.io/Leaflet.draw/src/draw/handler/Draw.Marker.js"></script>
    <script src="http://leaflet.github.io/Leaflet.draw/src/draw/handler/Draw.Circle.js"></script>
    <script src="http://leaflet.github.io/Leaflet.draw/src/draw/handler/Draw.CircleMarker.js"></script>
    <script src="http://leaflet.github.io/Leaflet.draw/src/draw/handler/Draw.Polygon.js"></script>
    <script src="http://leaflet.github.io/Leaflet.draw/src/draw/handler/Draw.Rectangle.js"></script>
    <script src="http://leaflet.github.io/Leaflet.draw/src/edit/EditToolbar.js"></script>
    <script src="http://leaflet.github.io/Leaflet.draw/src/edit/handler/EditToolbar.Edit.js"></script>
    <script src="http://leaflet.github.io/Leaflet.draw/src/edit/handler/EditToolbar.Delete.js"></script>
    <script src="http://leaflet.github.io/Leaflet.draw/src/Control.Draw.js"></script>
    <script src="http://leaflet.github.io/Leaflet.draw/src/edit/handler/Edit.Poly.js"></script>
    <script src="http://leaflet.github.io/Leaflet.draw/src/edit/handler/Edit.SimpleShape.js"></script>
    <script src="http://leaflet.github.io/Leaflet.draw/src/edit/handler/Edit.Rectangle.js"></script>
    <script src="http://leaflet.github.io/Leaflet.draw/src/edit/handler/Edit.Marker.js"></script>
    <script src="http://leaflet.github.io/Leaflet.draw/src/edit/handler/Edit.CircleMarker.js"></script>
    <script src="http://leaflet.github.io/Leaflet.draw/src/edit/handler/Edit.Circle.js"></script>
    <script src="http://maps.google.com/maps/api/js?v=3&sensor=false"></script>
    <!--<script src="lib/leaflet/Google.js"></script>--> 

@yield("scriptsPlugins")

<script src="{{asset("assets/js/jquery-validation/jquery.validate.min.js")}}"></script>
<script src="{{asset("assets/js/jquery-validation/localization/messages_es.min.js")}}"></script>
<script src="{{asset("assets/js/funcionees.js")}}"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<script src="{{asset("assets/js/scripts.js")}}"></script>


@yield("scripts")


</body>
</html>
