@extends("theme.$theme.layout1")
@section('titulo')
        Sistema Menús
@endsection

@section('titulocontenido')
    MODULO MENÚ
@endsection

@section("styles")
<link href="{{asset("assets/js/jquery-nestable/jquery.nestable.css")}}" rel="stylesheet" type="text/css" />
@endsection

@section("scriptsPlugins")
<script src="{{asset("assets/js/jquery-nestable/jquery.nestable.js")}}" type="text/javascript"></script>
@endsection

@section("scripts")
<script src="{{asset("assets/pages/scripts/admin/menu/index.js")}}" type="text/javascript"></script>
@endsection


@section('contenido')
<div class="row">
    <div class="col-lg-12">
        @include('includes.mensaje')
            <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Menú</h3>
                  <a href="{{route('crear_menu')}}" class="btn btn-success btn-sm float-right">
                    <i class="fa fa-fw fa-plus-circle"></i> Nuevo registro
                </a>
                </div>
                @csrf
                <div class="dd" id="nestable">
                    <ol class="dd-list">
                        @foreach ($menus as $key => $item)
                            @if ($item["menu_id"] != 0)
                                @break
                            @endif
                            @include("admin.menu.menu-item",["item" => $item])
                        @endforeach
                    </ol>
                </div>
            </div>
    </div>
</div>
@endsection