<div class="form-group">
    <label for="tipo_usuario" class="col-lg-3 control-label requerido">Tipo Usuario</label>
    <div class="col-lg-8">
    <input type="text" name="tipo_usuario" id="tipo_usuario" class="form-control" value="{{old('tipo_usuario', $data->tipo_usuario ?? '')}}" required/>
    </div>
</div>