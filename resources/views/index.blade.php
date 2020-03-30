@extends("theme.$theme.layout")
@include('includes.mensaje')



@section('contenido')
<div class="row">
      <div class="col-md-11">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title"> Relaciones Politicas </h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
              <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
              </ol>
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img class="d-block w-100" src="{{asset("assets/imagenes/1.png")}}" alt="First slide">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="{{asset("assets/imagenes/2.png")}}" alt="Second slide">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="{{asset("assets/imagenes/3.png")}}" alt="Third slide">
                </div>
              </div>
              <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
          </div>
        <div class="card-header">
          <h3 class="card-title"> PENSAMIENTOS </h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <div id="accordion">
            <!-- we are adding the .class so bootstrap.js collapse plugin detects it -->
               <div class="card card-primary">
              <div class="card-header">
                <h4 class="card-title">
                  <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                    COMANDANTE ETERNO HUGO CHAVEZ
                  </a>
                </h4>
              </div>
              <div id="collapseOne" class="panel-collapse collapse in">
                <table><tr><td class="col-md-6"> <div class="card-body">
                  Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.
                  3
                  wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt
                  laborum
                  eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee
                  nulla
                  assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred
                  nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft
                  beer
                  farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus
                  labore sustainable VHS.
                </div></td>
                <td class="col-md-6">
                  <div>
                    <img class="d-block w-100" src="{{asset("assets/imagenes/1.png")}}" alt="First slide">
                  </div>
                </td>
              </tr>
              </table>
                    </div>
                  </div>
            <div class="card card-danger">
              <div class="card-header">
                <h4 class="card-title">
                  <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                    PRESIDENTE NICOLAS MADURO
                  </a>
                </h4>
              </div>
              <div id="collapseTwo" class="panel-collapse collapse">
                <table><tr><td class="col-md-6"> <div class="card-body">
                  Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.
                  3
                  wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt
                  laborum
                  eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee
                  nulla
                  assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred
                  nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft
                  beer
                  farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus
                  labore sustainable VHS.
                </div></td>
                <td class="col-md-6">
                  <div>
                    <img class="d-block w-100" src="{{asset("assets/imagenes/1.png")}}" alt="First slide">
                  </div>
                </td>
              </tr>
              </table>
              </div>
            </div>
            <div class="card card-success">
              <div class="card-header">
                <h4 class="card-title">
                  <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                    DENNYS GUEDEZ
                  </a>
                </h4>
              </div>
              <div id="collapseThree" class="panel-collapse collapse">
               <table><tr><td class="col-md-6"> <div class="card-body">
                  Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.
                  3
                  wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt
                  laborum
                  eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee
                  nulla
                  assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred
                  nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft
                  beer
                  farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus
                  labore sustainable VHS.
                </div></td>
                <td class="col-md-6">
                  <div>
                    <img class="d-block w-100" src="{{asset("assets/imagenes/1.png")}}" alt="First slide">
                  </div>
                </td>
              </tr>
              </table>
              </div>
            </div>
          </div>
        </div>
        <!-- /.card-body -->
      </table>
      </div>
      <!-- /.card -->
    </div>

      <div class="col-md-5">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">
              <i class=""></i>
              Objetivos de la Comision de Seguridad
            </h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <ul class="list-unstyled">
              <li>Lorem ipsum dolor sit amet</li>
              <li>Consectetur adipiscing elit</li>
              <li>Integer molestie lorem at massa</li>
              <li>Facilisis in pretium nisl aliquet</li>
              <li>Nulla volutpat aliquam velit
                <ul>
                  <li>Phasellus iaculis neque</li>
                  <li>Purus sodales ultricies</li>
                  <li>Vestibulum laoreet porttitor sem</li>
                  <li>Ac tristique libero volutpat at</li>
                </ul>
              </li>
              <li>Faucibus porta lacus fringilla vel</li>
              <li>Aenean sit amet erat nunc</li>
              <li>Eget porttitor lorem</li>
            </ul>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
      <div class="card col-md-6">
        <div class="card-header">
          <h3 class="card-title"> Miembros de la Comision de Seguridad </h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body p-0">
          <ul class="users-list clearfix">
            <li>
              <img src="{{asset("assets/imagenes/luis.jpg")}}" alt="User Image">
              <a class="users-list-name"> Luis SantaFé </a>
            </li>
            <li>
              <img src="{{asset("assets/imagenes/1.png")}}" alt="User Image">
              <a class="users-list-name">Norman</a>
            </li>
            <li>
              <img src="{{asset("assets/imagenes/1.png")}}" alt="User Image">
              <a class="users-list-name">Jane</a>
            </li>
            <li>
              <img src="{{asset("assets/imagenes/1.png")}}" alt="User Image">
              <a class="users-list-name">John</a>
            </li>
            <li>
              <img src="{{asset("assets/imagenes/1.png")}}" alt="User Image">
              <a class="users-list-name">Alexander</a>
            </li>
            <li>
              <img src="{{asset("assets/imagenes/1.png")}}" alt="User Image">
              <a class="users-list-name">Sarah</a>
            </li>
            <li>
              <img src="{{asset("assets/imagenes/1.png")}}" alt="User Image">
              <a class="users-list-name">Nora</a>
            </li>
            <li>
              <img src="{{asset("assets/imagenes/1.png")}}" alt="User Image">
              <a class="users-list-name">Nadia</a>
            </li>
          </ul>
        </div>
      </div>
      <!-- ./col -->
    </div>
 

@endsection