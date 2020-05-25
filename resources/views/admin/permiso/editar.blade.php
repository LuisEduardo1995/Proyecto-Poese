@extends("theme.$theme.layout1")
@section('titulo')
        POESE
@endsection

@section('titulocontenido')
    Modulo Permiso
@endsection

@section('scripts')
<script src="{{asset("assets/pages/scripts/admin/permiso/crear.js")}}"></script>
@endsection

@section('contenido')
<div class="row">
    <div class="col-lg-12">
        @include('includes.form-error')
        @include('includes.mensaje')
            <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Editar Permiso {{$data->responsabilidad}}</h3>
                  <a href="{{route('permiso')}}" class="btn btn-success btn-sm float-right">
                    <i class="fa fa-fw fa-reply-all"></i> Volver al listado
                 </a>
                </div>
            <form action="{{route('actualizar_permiso', ['id' => $data->id])}}" id="form-general" class="form-horizontal" method="POST" autocomplete="off">
                @csrf @method("put")
                <div class="card-body">
                    @include('admin.permiso.form')
                </div>
                <div class="card-footer">
                        @include('includes.boton-form-editar')
                </div>
                <div class="box-tools pull-right">
                    
                </div>
            </form>
        </div>
    </div>
</div> 
@endsection