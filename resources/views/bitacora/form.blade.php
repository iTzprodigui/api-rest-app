<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('idDocente') }}
            {{ Form::text('idDocente', $bitacora->idDocente, ['class' => 'form-control' . ($errors->has('idDocente') ? ' is-invalid' : ''), 'placeholder' => 'Iddocente']) }}
            {!! $errors->first('idDocente', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('idAlumno') }}
            {{ Form::text('idAlumno', $bitacora->idAlumno, ['class' => 'form-control' . ($errors->has('idAlumno') ? ' is-invalid' : ''), 'placeholder' => 'Idalumno']) }}
            {!! $errors->first('idAlumno', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fecha') }}
            {{ Form::text('fecha', $bitacora->fecha, ['class' => 'form-control' . ($errors->has('fecha') ? ' is-invalid' : ''), 'placeholder' => 'Fecha']) }}
            {!! $errors->first('fecha', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('anotacion') }}
            {{ Form::text('anotacion', $bitacora->anotacion, ['class' => 'form-control' . ($errors->has('anotacion') ? ' is-invalid' : ''), 'placeholder' => 'Anotacion']) }}
            {!! $errors->first('anotacion', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>