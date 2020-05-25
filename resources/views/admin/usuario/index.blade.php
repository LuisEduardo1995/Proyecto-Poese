@extends("theme.$theme.layout1")
@section('titulo')
        POESE
@endsection

@section('titulocontenido')
    Modulo Usuario
@endsection

@section("scripts")
<script src="{{asset("assets/pages/scripts/admin/index.js")}}" type="text/javascript"></script>


<script>
  $(document).ready(function() {
    $("#usuario").DataTable({
      "serveSide": true,
      "ajax": "{{ url('api/usuario') }}",
      "columns": [
        {data: 'id'},
        {data: 'cedula'},
        {data: 'nombre'},
        {data: 'apellido'},
        {data: 'telefono'},
        {data: 'email'},
        {data:'usuario'},
        {data: 'btn'},
                     
      ]
    }); 
  });
</script>


@endsection

@section('contenido')
<div class="row">
    <div class="col-lg-12">
        @include('includes.mensaje')
        <div class="card card-primary">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Usuarios</h3>
              <a href="{{route('crear_usuario')}}" class="btn btn-success btn-sm float-right">
                <i class="fa fa-fw fa-plus-circle"></i> Nuevo registro
            </a>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="usuario" class="table table-bordered table-striped" style="width:100%">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Cedula</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Telefono</th>
                    <th>Correo</th>
                    <th>Usuario</th>
                    <th class="width70"> Opciones</th>
                </tr>
                </thead>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
           
        </div>
    </div>
@endsection

