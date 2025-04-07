<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/tabla.css')}}">
    <script src="https://kit.fontawesome.com/d73986632c.js" crossorigin="anonymous"></script>
    <title>gestor de tareas</title>
</head>
<body>
  <h1 class="text-center p-3">Gestor de Tareas</h1>
  @if (session("correcto"))
  <div class="alert alert-success" role="alert">{{session("correcto")}}</div>
  @endif
  @if (session("ERROR"))
  <div class="alert alert-danger" role="alert">{{session("ERROR")}}</div>
  @endif
  <!-- Modal de creacion-->
<div class="modal fade" id="crear" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Crear Tarea</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="{{ route('gtarea.create') }}" method="POST">
          @csrf
    <legend>Tarea Nueva</legend>
    <div class="mb-3">
      <label for="disabledTextInput" class="form-label">Descripcion de tarea</label>
      <input type="text" id="disabledTextInput" class="form-control" placeholder="Descripcion de tarea" name="D_tarea">
    </div>
    <div class="mb-3">
      <label for="disabledSelect" class="form-label">Estatus</label>
      <select id="disabledSelect" class="form-select" name="Estatus">
        <option selected>Selecione Estado</option>
        <option value="Pendiente">Pendiente</option>
        <option value="Completado">Completado</option>
        <option value="Cancelado">Cancelado</option>
        <option value="Activo">Activo</option>
        <option value="Retenido">Retenido</option>
      </select>
    </div>
    <div class="mb-3">
      <label for="disabledTextInput" class="form-label">Fecha de publicasion</label>
      <input type="date" id="disabledTextInput" class="form-control" placeholder="DD//MM//AA" name="F_publicasion">
    </div>
    <div class="mb-3">
      <label for="disabledTextInput" class="form-label">Comentarios</label>
      <input type="text" id="disabledTextInput" class="form-control" placeholder="Comentarios" name="Comentarios">
    </div>
    <div class="mb-3">
      <label for="disabledTextInput" class="form-label">Encargado</label>
      <input type="text" id="disabledTextInput" class="form-control" placeholder="Pepito perez" name="usuario">
    </div>
  <div class="modal-footer">
    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
    <button type="submit" class="btn btn-success">Crear</button>
  </div>
</form>
      </div>
    </div>
  </div>
</div>
    <div class="container p-5 table-responsive">
        <button type="submit" class="btn btn-success btn-sm"  data-bs-toggle="modal" data-bs-target="#crear">Añadir tarea</button>
        <table class="table table-success table-bordered table-hover">
            <thead class="table-header-dark">
                <tr>
                    <th scope="col">Descripcion</th>
                    <th scope="col">Estatus</th>
                    <th scope="col">Fecha de publicasion</th>
                    <th scope="col">Comentarios</th>
                    <th scope="col">Usuarios</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                @foreach ($datos as $item)
                <tr>
                    <td>{{$item->D_tarea}}</td>
                    <td>{{$item->Estatus}}</td>
                    <td>{{$item->F_publicasion}}</td>
                    <td>{{$item->Comentarios}}</td>
                    <td>{{$item->usuario}}</td>
                    <td> 
                        <a href="#"  data-bs-toggle="modal" data-bs-target="#editar{{$item->id_tarea}}" class="btn btn-warning btn-sm"><i class="fa-solid fa-pen-nib"></i></a>
                        <a href="#" class="btn btn-sm btn-danger"><i class="fa-solid fa-trash" style="color: #000000;"></i></a>
                    </td>

<!-- Modal de editar-->
<div class="modal fade" id="editar{{$item->id_tarea}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Editar Tarea</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="{{ route('gtarea.update') }}" method="POST">
          @csrf
    <legend>Tarea Actual</legend>
    <div class="mb-3">
      <label for="disabledTextInput" class="form-label">Descripcion de tarea</label>
      <input type="text" id="disabledTextInput" class="form-control" placeholder="Descripcion de tarea" name="D_tarea" value="{{$item->D_tarea}}">
    </div>
    <div class="mb-3">
      <label for="disabledSelect" class="form-label">Estatus</label>
      <select id="disabledSelect" class="form-select" name="Estatus">
        <option selected>{{$item->Estatus}}</option>
        <option value="Pendiente">Pendiente</option>
        <option value="Completado">Completado</option>
        <option value="Cancelado">Cancelado</option>
        <option value="Activo">Activo</option>
        <option value="Retenido">Retenido</option>
      </select>
    </div>
    <div class="mb-3">
      <label for="disabledTextInput" class="form-label">Fecha de publicasion</label>
      <input type="date" id="disabledTextInput" class="form-control" placeholder="DD//MM//AA" name="F_publicasion" value="{{$item->F_publicasion}}">
    </div>
    <div class="mb-3">
      <label for="disabledTextInput" class="form-label">Comentarios</label>
      <input type="text" id="disabledTextInput" class="form-control" placeholder="Comentarios" name="Comentarios" value="{{$item->Comentarios}}">
    </div>
    <div class="mb-3">
      <label for="disabledTextInput" class="form-label">Encargado</label>
      <input type="text" id="disabledTextInput" class="form-control" placeholder="Pepito perez" name="usuario" value="{{$item->usuario}}">
    </div>
  <div class="modal-footer">
    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
    <button type="submit" class="btn btn-success">Actualizar</button>
  </div>
</form>
      </div>
    </div>
  </div>
</div>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>