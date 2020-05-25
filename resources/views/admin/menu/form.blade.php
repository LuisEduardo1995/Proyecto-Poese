<div class="form-group is-invalid">
    <label for="nombre" class="col-lg-3 control-label required">Nombre</label>
    <div class="col-lg-12">
    <input type="text" name="nombre" class="form-control" id="nombre" placeholder="Nombre" value="{{old('nombre', $data->nombre ?? '' )}}" required/>
  </div>
  </div>
  <div class="form-group is-invalid">
    <label for="url" class="col-lg-3 control-label required">URL</label>
    <div class="col-lg-12">
  <input type="text" name="url" class="form-control" id="url" placeholder="URL" value="{{old('url', $data->url ?? '' )}}" required/>
  </div>
</div>
<div class="form-group">
  <label for="url" class="col-lg-1 control-label">Icono</label>
  <div class="col-lg-12 input-group my-colorpicker2">
  <input type="text" name="icono" id="icono" class="form-control" value="{{old('icono', $data->icono ?? '')}}">
    <div class="input-group-append">
      <a href="{{route('icono_menu')}}"  class="input-group-text"><i class="fas fa-square"></i></a>
    </div>
    <div class="col-lg-1">
      <span id="mostrar-icono" class="fa fa-fw {{old("icono")}}"></span>
      </div>
  </div>
</div>