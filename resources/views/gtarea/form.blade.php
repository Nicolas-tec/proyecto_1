<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="id_tarea" class="form-label">{{ __('Id Tarea') }}</label>
            <input type="text" name="id_tarea" class="form-control @error('id_tarea') is-invalid @enderror" value="{{ old('id_tarea', $gtarea?->id_tarea) }}" id="id_tarea" placeholder="Id Tarea">
            {!! $errors->first('id_tarea', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="d_tarea" class="form-label">{{ __('D Tarea') }}</label>
            <input type="text" name="D_tarea" class="form-control @error('D_tarea') is-invalid @enderror" value="{{ old('D_tarea', $gtarea?->D_tarea) }}" id="d_tarea" placeholder="D Tarea">
            {!! $errors->first('D_tarea', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="estatus" class="form-label">{{ __('Estatus') }}</label>
            <input type="text" name="Estatus" class="form-control @error('Estatus') is-invalid @enderror" value="{{ old('Estatus', $gtarea?->Estatus) }}" id="estatus" placeholder="Estatus">
            {!! $errors->first('Estatus', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="f_publicasion" class="form-label">{{ __('F Publicasion') }}</label>
            <input type="text" name="F_publicasion" class="form-control @error('F_publicasion') is-invalid @enderror" value="{{ old('F_publicasion', $gtarea?->F_publicasion) }}" id="f_publicasion" placeholder="F Publicasion">
            {!! $errors->first('F_publicasion', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="comentarios" class="form-label">{{ __('Comentarios') }}</label>
            <input type="text" name="Comentarios" class="form-control @error('Comentarios') is-invalid @enderror" value="{{ old('Comentarios', $gtarea?->Comentarios) }}" id="comentarios" placeholder="Comentarios">
            {!! $errors->first('Comentarios', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="usuario" class="form-label">{{ __('Usuario') }}</label>
            <input type="text" name="usuario" class="form-control @error('usuario') is-invalid @enderror" value="{{ old('usuario', $gtarea?->usuario) }}" id="usuario" placeholder="Usuario">
            {!! $errors->first('usuario', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>