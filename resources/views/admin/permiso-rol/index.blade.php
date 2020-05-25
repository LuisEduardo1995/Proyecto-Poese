@extends("theme.$theme.layout1")
@section('titulo')
        Sistema Menús
@endsection

@section('titulocontenido')
    MODULO PERMISO - ROL
@endsection

@section('scripts')
<script src="{{asset("assets/pages/scripts/admin/permiso-rol/index.js")}}" type="text/javascript"></script>
@endsection

@section('contenido')
<div class="row">
    <div class="col-lg-12">
        @include('includes.mensaje')
            <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Permiso Rol</h3>
                </div>
                    @csrf
                    <table class="table table-striped table-bordered table-hover" id="tabla-data">
                                <thead>
                                    <tr>
                                        <th>Permiso</th>
                                        @foreach ($rols as $id => $tipo_usuario)
                                        <th class="text-center">{{$tipo_usuario}}</th>
                                        @endforeach
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($permisos as $key => $permiso)
                                        <tr>
                                            <td class="font-weight-bold"><i></i> {{$permiso["responsabilidad"]}}</td>
                                            @foreach($rols as $id => $tipo_usuario)
                                                <td class="text-center">
                                                <input
                                                type="checkbox"
                                                class="permiso_rol"
                                                name="permiso_rol[]"
                                                data-permisoid={{$permiso[ "id"]}}
                                                value="{{$id}}" {{in_array($id, array_column($permisosRols[$permiso["id"]], "id"))? "checked" : ""}}>
                                                </td>
                                            @endforeach
                                        </tr>
                                    @endforeach
                                </tbody>
                    </table>
            </div>
    </div>
</div>
@endsection
