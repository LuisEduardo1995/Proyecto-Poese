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
                  <h3 class="card-title">Actualizar Meún</h3>
                  <a href="{{route('menu')}}" class="btn btn-success btn-sm float-right">
                    <i class="fa fa-fw fa-reply-all"></i> Volver al Listado
                </a>
                </div>

                <form action="{{route('actualizar_menu', ['id' => $data->id])}}" id="form-general" class="form-horizontal" method="POST" autocomplete="off">
                    @csrf @method("put")
                    <div class="card-body">
                      @include('admin.menu.form')
                    </div>
                    <!-- /.card-body -->
    
                    <div class="card-footer">
                      @include('includes.boton-form-editar')
                    </div>
                  </form>
            </div>
    </div>
</div>
@endsection
