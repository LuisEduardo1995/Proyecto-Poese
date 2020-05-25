@if (session("mensaje"))
<div class="card card-success alert alert-dismissible" data-auto-dismiss="3000">
    <div class="card-header">
      <h3 class="card-title">Mensaje sistema POESE</h3>

      <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i>
        </button>
      </div>
      <!-- /.card-tools -->
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <ul>
          
                <li>{{session("mensaje")}}</li>
            
        </ul>
    </div>
    <!-- /.card-body -->
  </div>
  @endif