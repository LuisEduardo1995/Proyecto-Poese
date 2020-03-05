@extends("theme.$theme.layout")



@section('contenido')


<div class="row">
    <div class="col-md-11">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Collapsible Accordion</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <div id="accordion">
            <!-- we are adding the .class so bootstrap.js collapse plugin detects it -->
            <div class="card card-primary">
              <div class="card-header">
                <h4 class="card-title">
                  <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                    Collapsible Group Item #1
                  </a>
                </h4>
              </div>
              <div id="collapseOne" class="panel-collapse collapse in">
                <div class="card-body">
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
                </div>
              </div>
            </div>
            <div class="card card-danger">
              <div class="card-header">
                <h4 class="card-title">
                  <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                    Collapsible Group Danger
                  </a>
                </h4>
              </div>
              <div id="collapseTwo" class="panel-collapse collapse">
                <div class="card-body">
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
                </div>
              </div>
            </div>
            <div class="card card-success">
              <div class="card-header">
                <h4 class="card-title">
                  <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                    Collapsible Group Success
                  </a>
                </h4>
              </div>
              <div id="collapseThree" class="panel-collapse collapse">
                <div class="card-body">
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
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>


    <div class="col-md-6">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Carousel</h3>
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
                  <img class="d-block w-100" src="https://placehold.it/900x500/39CCCC/ffffff&text=I+Love+Bootstrap" alt="First slide">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="https://placehold.it/900x500/3c8dbc/ffffff&text=I+Love+Bootstrap" alt="Second slide">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="https://placehold.it/900x500/f39c12/ffffff&text=I+Love+Bootstrap" alt="Third slide">
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
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>

      <div class="col-md-5">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">
              <i class="fas fa-text-width"></i>
              Unstyled List
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
      <!-- ./col -->
    </div>
    <!-- /.row -->


      <!-- /.col -->
    </div>

    

  


@endsection