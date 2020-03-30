@extends("theme.$theme.layout1")
@section('titulo')
        POESE
@endsection

@section('titulocontenido')
    Rol
@endsection

@section("scripts")
<script src="{{asset("assets/pages/scripts/admin/crear.js")}}" type="text/javascript"></script>
@endsection

@section('contenido')
<div class="row">
    <div class="col-lg-12">
        @include('includes.form-error')
        @include('includes.mensaje')
            <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Registrar Usuario</h3>
                  <a href="{{route('rol')}}" class="btn btn-success btn-sm float-right">
                    <i class="fa fa-fw fa-reply-all"></i> Volver al listado
                 </a>
                </div>
            <form action="{{route('guardar_rol')}}" id="form-general" class="form-horizontal" method="POST" autocomplete="off">
                @csrf
                <div class="card-body">
                    @include('admin.rol.form')
                </div>
                <div class="card-footer">
                        @include('includes.boton-form-crear')
                </div>
                <div class="box-tools pull-right">
                    
                </div>
            </form>
        </div>
    </div>
</div> 
@endsection