@extends("theme.$theme.layout1")
@section('titulo')
        Sistema Menús
@endsection

@section('titulocontenido')
    MODULO MENÚ
@endsection

@section('scripts')
<script src="{{asset("assets/pages/scripts/admin/crear.js")}}"></script>
@endsection

@section('contenido')
<div class="row">
    <div class="col-lg-12">
        @include('includes.form-error')
        @include('includes.mensaje')
            <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Registrar Menú</h3>
                </div>

                <form action="{{route('guardar_menu')}}" id="form-general" method="POST">
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
