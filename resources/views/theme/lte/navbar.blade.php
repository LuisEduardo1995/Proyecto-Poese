<!-- Navbar -->
  <nav class="navbar navbar-expand navbar-primary navbar-dark">
    <div class="container">
      <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse order-3" id="navbarCollapse">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
          <li class="nav-item">
            <a href="/" class="nav-link">INICIO</a>
          </li>
          <li class="nav-item">
            <a href="{{url('noticias')}}" class="nav-link">NOTICIAS</a>
          </li>
          </ul>

         </div>

      <!-- Right navbar links -->
      <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">
        <!-- Messages Dropdown Menu -->
        <li class="nav-item dropdown">

              <a href="{{route('login')}}">
                <button type="button" class="btn btn-success btn-sm">
                   Inicio Sección 
                </button>
              </a>
              <a href="{{route('login')}}">
                <button type="button" class="btn btn-danger btn-sm">
                  Registrar Usuario
                </button>
              </a>

            
          
    </div>
 </nav>
  <!-- /.navbar -->

    <div class="modal fade" id="modal-default">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">


  
            </div>
          </div>
        </div>
    </div>
    

 