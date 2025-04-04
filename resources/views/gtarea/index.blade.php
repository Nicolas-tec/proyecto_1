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
    <div class="container p-5 table-responsive">
        <h1 class="text-center p-3">Gestor de Tareas</h1>
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
                        <a href="#"  data-bs-toggle="modal" data-bs-target="#editar" class="btn btn-warning btn-sm"><i class="fa-solid fa-pen-nib"></i></a>
                        <a href="#" class="btn btn-sm btn-danger"><i class="fa-solid fa-trash" style="color: #000000;"></i></a>
                    </td>

<!-- Modal de editar-->
<div class="modal fade" id="editar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Editar Tarea</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form>
  <fieldset disabled>
    <legend>Disabled fieldset example</legend>
    <div class="mb-3">
      <label for="disabledTextInput" class="form-label">Disabled input</label>
      <input type="text" id="disabledTextInput" class="form-control" placeholder="Disabled input">
    </div>
    <div class="mb-3">
      <label for="disabledSelect" class="form-label">Disabled select menu</label>
      <select id="disabledSelect" class="form-select">
        <option>Disabled select</option>
      </select>
    </div>
    <div class="mb-3">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" id="disabledFieldsetCheck" disabled>
        <label class="form-check-label" for="disabledFieldsetCheck">
          Can't check this
        </label>
      </div>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </fieldset>
  <div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
    <button type="button" class="btn btn-primary">Save changes</button>
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