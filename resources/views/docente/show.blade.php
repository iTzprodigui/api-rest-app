@extends('layouts.app')

@section('template_title')
    {{ $docente->name ?? 'Show Docente' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Docente</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('docentes.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombres:</strong>
                            {{ $docente->nombres }}
                        </div>
                        <div class="form-group">
                            <strong>Apellido Paterno:</strong>
                            {{ $docente->apellido_paterno }}
                        </div>
                        <div class="form-group">
                            <strong>Apellido Materno:</strong>
                            {{ $docente->apellido_materno }}
                        </div>
                        <div class="form-group">
                            <strong>Matricula:</strong>
                            {{ $docente->matricula }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
