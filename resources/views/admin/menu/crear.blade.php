@extends("theme.$theme.layout1")
@section('titulo')
        Sistema Menús
@endsection

@section('titulocontenido')
    MODULO MENÚ
@endsection

@section('scripts')
<script src="{{asset("assets/pages/scripts/admin/menu/crear.js")}}"></script>
@endsection

@section('contenido')
<div class="row">
    <div class="col-lg-12">
        @include('includes.form-error')
        @include('includes.mensaje')
            <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Crear Menús</h3>
                  <a href="{{route('menu')}}" class="btn btn-success btn-sm float-right">
                    <i class="fa fa-fw fa-reply-all"></i> Nuevo registro
                </a>
                </div>

                <form action="{{route('guardar_menu')}}" id="form-general" class="form-horizontal" method="POST" autocomplete="off">
                    @csrf
                    <div class="card-body">
                      @include('admin.menu.form')
                    </div>
                    <!-- /.card-body -->
    
                    <div class="card-footer">
                      @include('includes.boton-form-crear')
                    </div>
                  </form>
            </div>
    </div>
</div>
@endsection
