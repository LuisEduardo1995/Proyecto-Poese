<div class="form-group">
    <label for="cedula" class="col-lg-3 control-label required">Cedula</label>
    <div class="col-lg-8">
    <input type="text" name="cedula" id="cedula" class="form-control" value="{{old('cedula', $data->cedula ?? '')}}" required/>
    </div>
</div>
<div class="form-group">
    <label for="nombre" class="col-lg-3 control-label required">Nombre</label>
    <div class="col-lg-8">
    <input type="text" name="nombre" id="nombre" class="form-control" value="{{old('nombre', $data->nombre ?? '')}}" required/>
    </div>
</div>
<div class="form-group">
    <label for="apellido" class="col-lg-3 control-label required">Apellido</label>
    <div class="col-lg-8">
    <input type="text" name="apellido" id="apellido" class="form-control" value="{{old('apellido', $data->apellido ?? '')}}" required/>
    </div>
</div>
<div class="form-group">
    <label for="telofono" class="col-lg-3 control-label required">Telefono</label>
    <div class="col-lg-8">
    <input type="text" name="telefono" id="telefono" class="form-control" value="{{old('telefono', $data->telefono ?? '')}}" required/>
    </div>
</div>
<div class="form-group">
    <label for="correo" class="col-lg-3 control-label required">Correo</label> 
    <div class="col-lg-8">
    <input type="email" name="email" id="email" class="form-control" value="{{old('email', $data->email ?? '')}}" required/>
    </div>
</div>
<div class="form-group">
    <label for="usuario" class="col-lg-3 control-label required">Usuario</label>
    <div class="col-lg-8">
    <input type="text" name="usuario" id="usuario" class="form-control" value="{{old('usuario', $data->usuario ?? '')}}" required/>
    </div>
</div>
<div class="form-group">
    <label for="password" class="col-lg-3 control-label {{!isset($data) ? 'required' : ''}}">Contraseña</label>
    <div class="col-lg-8">
    <input type="password" name="password" id="password" class="form-control" value="" {{!isset($data) ? 'required' : ''}} minlength="5"/>
    </div>
</div>
<div class="form-group">
    <label for="re_password" class="col-lg-3 control-label {{!isset($data) ? 'required' : ''}}">Repetir Contraseña</label>
    <div class="col-lg-8">
    <input type="password" name="re_password" id="re_password" class="form-control" value="" {{!isset($data) ? 'required' : ''}} minlength="5"/>
    </div>
</div>
<div class="form-group">
    <label for="rol_id" class="col-lg-3 control-label required">Rol</label>
    <div class="col-lg-8">
        <select name="rol_id[]" id="rol_id" class="form-control" multiple="" required>
            <option value="">Seleccione el rol</option>
            @foreach($rols as $id => $responsabilidad)
                <option
                value="{{$id}}"
                {{is_array(old('rol_id')) ? (in_array($id, old('rol_id')) ? 'selected' : '')  : (isset($data) ? ($data->roles->firstWhere('id', $id) ? 'selected' : '') : '')}}
                >
                {{$responsabilidad}}
                </option>
            @endforeach
        </select>
    </div>
</div>