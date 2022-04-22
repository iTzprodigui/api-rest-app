@extends('layouts.app')

@section('template_title')
    {{ $alumno->name ?? 'Show Alumno' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Alumno</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('alumnos.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombres:</strong>
                            {{ $alumno->Nombres }}
                        </div>
                        <div class="form-group">
                            <strong>Apellidopa:</strong>
                            {{ $alumno->ApellidoPa }}
                        </div>
                        <div class="form-group">
                            <strong>Apellidoma:</strong>
                            {{ $alumno->ApellidoMa }}
                        </div>
                        <div class="form-group">
                            <strong>Matricula:</strong>
                            {{ $alumno->Matricula }}
                        </div>
                        <div class="form-group">
                            <strong>Contrasena:</strong>
                            {{ $alumno->Contrasena }}
                        </div>
                        <div class="form-group">
                            <strong>Grado:</strong>
                            {{ $alumno->Grado }}
                        </div>
                        <div class="form-group">
                            <strong>Grupo:</strong>
                            {{ $alumno->Grupo }}
                        </div>
                        <div class="form-group">
                            <strong>Ciclo Escolar:</strong>
                            {{ $alumno->Ciclo_Escolar }}
                        </div>
                        <div class="form-group">
                            <strong>Foto:</strong>
                            {{ $alumno->Foto }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
