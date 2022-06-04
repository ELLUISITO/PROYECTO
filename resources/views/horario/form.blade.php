<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('id_restaurantes') }}
            {{ Form::text('id_restaurantes', $horario->id_restaurantes, ['class' => 'form-control' . ($errors->has('id_restaurantes') ? ' is-invalid' : ''), 'placeholder' => 'Id Restaurantes']) }}
            {!! $errors->first('id_restaurantes', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('dia_semana') }}
            {{ Form::text('dia_semana', $horario->dia_semana, ['class' => 'form-control' . ($errors->has('dia_semana') ? ' is-invalid' : ''), 'placeholder' => 'Dia Semana']) }}
            {!! $errors->first('dia_semana', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('hora_apertura') }}
            {{ Form::text('hora_apertura', $horario->hora_apertura, ['class' => 'form-control' . ($errors->has('hora_apertura') ? ' is-invalid' : ''), 'placeholder' => 'Hora Apertura']) }}
            {!! $errors->first('hora_apertura', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('hora_cierre') }}
            {{ Form::text('hora_cierre', $horario->hora_cierre, ['class' => 'form-control' . ($errors->has('hora_cierre') ? ' is-invalid' : ''), 'placeholder' => 'Hora Cierre']) }}
            {!! $errors->first('hora_cierre', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>