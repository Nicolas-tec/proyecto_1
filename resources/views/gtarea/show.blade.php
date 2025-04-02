@extends('layouts.app')

@section('template_title')
    {{ $gtarea->name ?? __('Show') . " " . __('Gtarea') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Gtarea</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('gtareas.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                                <div class="form-group mb-2 mb20">
                                    <strong>Id Tarea:</strong>
                                    {{ $gtarea->id_tarea }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>D Tarea:</strong>
                                    {{ $gtarea->D_tarea }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Estatus:</strong>
                                    {{ $gtarea->Estatus }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>F Publicasion:</strong>
                                    {{ $gtarea->F_publicasion }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Comentarios:</strong>
                                    {{ $gtarea->Comentarios }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Usuario:</strong>
                                    {{ $gtarea->usuario }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
