@extends('layouts.app')

@section('template_title')
    {{ $bitacora->name ?? 'Show Bitacora' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Bitacora</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('bitacoras.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Iddocente:</strong>
                            {{ $bitacora->idDocente }}
                        </div>
                        <div class="form-group">
                            <strong>Idalumno:</strong>
                            {{ $bitacora->idAlumno }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha:</strong>
                            {{ $bitacora->fecha }}
                        </div>
                        <div class="form-group">
                            <strong>Anotacion:</strong>
                            {{ $bitacora->anotacion }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
