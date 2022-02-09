<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('cargo') }}
            {{ Form::text('cargo', $empleado->cargo, ['class' => 'form-control' . ($errors->has('cargo') ? ' is-invalid' : ''), 'placeholder' => 'Cargo']) }}
            {!! $errors->first('cargo', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_usuarios') }}
            {{ Form::text('id_usuarios', $empleado->id_usuarios, ['class' => 'form-control' . ($errors->has('id_usuarios') ? ' is-invalid' : ''), 'placeholder' => 'Id Usuarios']) }}
            {!! $errors->first('id_usuarios', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Aceptar</button>
    </div>
</div>