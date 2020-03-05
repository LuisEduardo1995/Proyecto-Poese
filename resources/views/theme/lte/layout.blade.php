    <!DOCTYPE html>
    <!--
    This is a starter template page. Use this page to start your new project from
    scratch. This page gets rid of all links and provides the needed markup only.
    -->
    <html lang="en">
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta http-equiv="x-ua-compatible" content="ie=edge">

      <title>@yield('titulo','POESE') | SEGURIDAD DE LA NACION </title>

           <!-- Font Awesome -->
      <link rel="stylesheet" href="{{asset("assets/$theme/plugins/fontawesome-free/css/all.min.css")}}">
      <!-- SweetAlert2 -->
      <link rel="stylesheet" href="{{asset("assets/$theme/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css")}}">
      <!-- Toastr -->
      <link rel="stylesheet" href="{{asset("assets/$theme/plugins/toastr/toastr.min.css")}}">
      <!-- Font Awesome Icons -->
      <link rel="stylesheet" href="{{asset("assets/$theme/plugins/fontawesome-free/css/all.min.css")}}">
      <!-- Theme style -->
      <link rel="stylesheet" href="{{asset("assets/$theme/dist/css/adminlte.min.css")}}">

      <!-- estilos unicos de contenidos -->
      @yield("styles")

      <!--/ estilos unicos de contenidos -->



      <!-- Google Font: Source Sans Pro -->
      <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    </head>
    <body class="hold-transition layout-top-nav">
     <div class="wrapper"> 
      <!-- Content Wrapper. Contains page content -->

      <!-- menu -->

      @include("theme/$theme/navbar")


      <!-- /menu -->


        <div class="content-wrapper">
          <!-- Content Header (Page header) -->
          <div class="content-header">
            <div class="container">
              <div class="row mb-2">
                <div class="col-sm-11">
                  <h1 class="m-0 text-dark"> SEGURIDAD DE LA NACION<small></small></h1>
           
                        <!-- contenido de la pagina -->


                        @yield("contenido")

                        <!--/ contenido de la pagina -->

                 </div><!-- /.col -->
                
               </div><!-- /.row -->
             </div><!-- /.container-fluid -->
           </div>
                       <!-- /.content-header -->



                     <!-- footer -->


                        @include("theme/$theme/footer")



                     <!--/ footer -->
         </div>

        </div>

<!-- jQuery -->
<script src="{{asset("assets/$theme/plugins/jquery/jquery.min.js")}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset("assets/$theme/plugins/bootstrap/js/bootstrap.bundle.min.js")}}"></script>
<!-- SweetAlert2 -->
<script src="{{asset("assets/$theme/plugins/sweetalert2/sweetalert2.min.js")}}"></script>
<!-- Toastr -->
<script src="{{asset("assets/$theme/plugins/toastr/toastr.min.js")}}"></script>
<!-- AdminLTE App -->
<script src="{{asset("assets/$theme/dist/js/adminlte.min.js")}}"></script>

@yield("scripts")


</body>
</html>





