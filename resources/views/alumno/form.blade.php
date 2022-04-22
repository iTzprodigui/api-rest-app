<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Nombres') }}
            {{ Form::text('Nombres', $alumno->Nombres, ['class' => 'form-control' . ($errors->has('Nombres') ? ' is-invalid' : ''), 'placeholder' => 'Nombres']) }}
            {!! $errors->first('Nombres', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('ApellidoPa') }}
            {{ Form::text('ApellidoPa', $alumno->ApellidoPa, ['class' => 'form-control' . ($errors->has('ApellidoPa') ? ' is-invalid' : ''), 'placeholder' => 'Apellidopa']) }}
            {!! $errors->first('ApellidoPa', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('ApellidoMa') }}
            {{ Form::text('ApellidoMa', $alumno->ApellidoMa, ['class' => 'form-control' . ($errors->has('ApellidoMa') ? ' is-invalid' : ''), 'placeholder' => 'Apellidoma']) }}
            {!! $errors->first('ApellidoMa', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Matricula') }}
            {{ Form::text('Matricula', $alumno->Matricula, ['class' => 'form-control' . ($errors->has('Matricula') ? ' is-invalid' : ''), 'placeholder' => 'Matricula']) }}
            {!! $errors->first('Matricula', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Contrasena') }}
            {{ Form::text('Contrasena', $alumno->Contrasena, ['class' => 'form-control' . ($errors->has('Contrasena') ? ' is-invalid' : ''), 'placeholder' => 'Contrasena']) }}
            {!! $errors->first('Contrasena', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Grado') }}
            {{ Form::text('Grado', $alumno->Grado, ['class' => 'form-control' . ($errors->has('Grado') ? ' is-invalid' : ''), 'placeholder' => 'Grado']) }}
            {!! $errors->first('Grado', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Grupo') }}
            {{ Form::text('Grupo', $alumno->Grupo, ['class' => 'form-control' . ($errors->has('Grupo') ? ' is-invalid' : ''), 'placeholder' => 'Grupo']) }}
            {!! $errors->first('Grupo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Ciclo_Escolar') }}
            {{ Form::text('Ciclo_Escolar', $alumno->Ciclo_Escolar, ['class' => 'form-control' . ($errors->has('Ciclo_Escolar') ? ' is-invalid' : ''), 'placeholder' => 'Ciclo Escolar']) }}
            {!! $errors->first('Ciclo_Escolar', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Foto') }}
            {{ Form::text('Foto', $alumno->Foto, ['class' => 'form-control' . ($errors->has('Foto') ? ' is-invalid' : ''), 'placeholder' => 'Foto']) }}
            {!! $errors->first('Foto', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>