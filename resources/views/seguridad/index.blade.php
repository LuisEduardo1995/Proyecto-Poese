<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>@yield('titulo','POESE') | SEGURIDAD DE LA NACION </title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset("assets/$theme/plugins/fontawesome-free/css/all.min.css")}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="{{asset("assets/$theme/plugins/icheck-bootstrap/icheck-bootstrap.min.css")}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset("assets/$theme/dist/css/adminlte.min.css")}}">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
  <a href="{{route('inicio')}}"><b>POESE</b></a>
  </div>

                      <!-- /.login-logo -->
                      <div class="card">
                        <div class="card-body login-card-body">
                          <p class="login-box-msg">INGRESA LOS DATOS</p>

                               @if($errors->any())
                                <div class="card bg-danger alert alert-dismissible">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                    
                                       <div class="alert-text">
                                            @foreach ($errors->all() as $error)
                                                <li>{{$error}}</li>
                                            @endforeach
                                       </div>
                                  </div>
                                  @endif

                                <form action="{{route('login_post')}}" id="form-general" class="form-horizontal" method="POST" autocomplete="off">
                                @csrf
                            <div class="input-group mb-3">
                              <input type="text" name="usuario" class="form-control" value="{{old('usuario')}}" placeholder="Usuario">
                              <div class="input-group-append">
                                <div class="input-group-text">
                                  <span class="fas fa-user"></span>
                                </div>
                              </div>
                            </div>
                            <div class="input-group mb-3">
                              <input type="password" name="password" class="form-control" placeholder="Contraseña">
                              <div class="input-group-append">
                                <div class="input-group-text">
                                  <span class="fas fa-lock"></span>
                                </div>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-8">
                                <div class="icheck-primary">
                                  <input type="checkbox" id="remember">
                                  <label for="remember">
                                    RECORDARME
                                  </label>
                                </div>
                              </div>
                              <!-- /.col -->
                              <div class="col-4">
                                <button type="submit" class="btn btn-success btn-sm-block">INGRESAR</button>
                              </div>
                              <!-- /.col -->
                            </div>
                          </form>

                          <p class="mb-1">
                            <a href="forgot-password.html">OLVIDE MI CONTRASEÑA</a>
                          </p>
                          
                        </div>
                        <!-- /.login-card-body -->
                      </div>
<!-- jQuery -->
<script src="{{asset("assets/$theme/plugins/jquery/jquery.min.js")}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset("assets/$theme/plugins/bootstrap/js/bootstrap.bundle.min.js")}}"></script>
<!-- AdminLTE App -->
<script src="{{asset("assets/$theme/dist/js/adminlte.min.js")}}"></script>

</body>
</html>
