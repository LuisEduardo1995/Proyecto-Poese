@if($errors->any())
<div class="card card-danger alert alert-dismissible">
    <div class="card-header">
      <h3 class="card-title">El formulario con tiene errores</h3>

      <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i>
        </button>
      </div>
      <!-- /.card-tools -->
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
    <!-- /.card-body -->
  </div>
  @endif