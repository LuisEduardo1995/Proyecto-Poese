@foreach ($datas as $data)
<tr>
    <td class="text-right py-0 align-middle">
        <div class="btn-group btn-group-sm">
                    <a href="{{route('editar_usuario', ['id' => $data->id])}}" class="btn btn-info" title="Editar este registro">
                        <i class="fas fa-eye"></i>
                    </a>
                    <form action="{{route('eliminar_usuario', ['id' => $data->id])}}" class="form-eliminar btn btn-danger" method="POST">
                        @csrf @method("delete")
                        <button type="submit" class="btn-accion-tabla eliminar tooltipsC" title="Eliminar este registro">
                            <i class="fas fa-trash"></i>
                        </button>
                    </form>
        </div>
    </td>
</tr>
@endforeach
