@extends("theme.$theme.layout1")
@section('titulo')
        POESE
@endsection

@section('titulocontenido')
    Modulo Tipo de Usuario
@endsection

@section("scripts")
<script src="{{asset("assets/pages/scripts/admin/index.js")}}" type="text/javascript"></script>
@endsection

@section('contenido')
<div class="row">
    <div class="col-lg-12">
        @include('includes.mensaje')
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Roles</h3>
                    <a href="{{route('crear_rol')}}" class="btn btn-success btn-sm float-right">
                        <i class="fa fa-fw fa-plus-circle"></i> Nuevo registro
                    </a>
            </div>
            <div class="box-body">
                <table class="table table-striped table-bordered table-hover" id="tabla-data">
                    <thead>
                        <tr>
                            <th>Tipo Usuario</th>
                            <th class="width70"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($datas as $data)
                        <tr>
                            <td>{{$data->tipo_usuario}}</td>
                            <td class="text-right py-0 align-middle">
                                <div class="btn-group btn-group-sm">
                                            <a href="{{route('editar_rol', ['id' => $data->id])}}" class="btn btn-info" title="Editar este registro">
                                                <i class="fas fa-eye"></i>
                                            </a>
                                            <form action="{{route('eliminar_rol', ['id' => $data->id])}}" class="form-eliminar btn btn-danger" method="POST">
                                                @csrf @method("delete")
                                                <button type="submit" class="btn-accion-tabla eliminar tooltipsC" title="Eliminar este registro">
                                                    <i class="fas fa-trash"></i>
                                                </button>
                                            </form>
                                </div>
                            </td>
                        </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
           
        </div>
    </div>
</div>
@endsection