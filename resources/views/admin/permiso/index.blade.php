@extends("theme.$theme.layout1")
@section('titulo')
        POESE
@endsection

@section('titulocontenido')
    Modulo Tipo de Usuario
@endsection

@section('contenido')
<div class="row">
    <div class="col-lg-12">
        @include('includes.mensaje')
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Permisos</h3>
                <a href="{{route('crear_permiso')}}" class="btn btn-success btn-sm float-right">
                    <i class="fa fa-fw fa-plus-circle"></i> Nuevo registro
                </a>
            </div>
            <div class="box-body">
                <table class="table table-striped table-bordered table-hover" id="tabla-data">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Responsabilidad </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($permisos as $permiso)
                            <tr>
                                <td>{{$permiso->id}}</td>
                                <td>{{$permiso->responsabilidad}}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
           
        </div>
    </div>
</div>
@endsection