@extends('layouts.app')

@section('template_title')
    {{ $horario->name ?? 'Show Horario' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Horario</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('horarios.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Id Restaurantes:</strong>
                            {{ $horario->id_restaurantes }}
                        </div>
                        <div class="form-group">
                            <strong>Dia Semana:</strong>
                            {{ $horario->dia_semana }}
                        </div>
                        <div class="form-group">
                            <strong>Hora Apertura:</strong>
                            {{ $horario->hora_apertura }}
                        </div>
                        <div class="form-group">
                            <strong>Hora Cierre:</strong>
                            {{ $horario->hora_cierre }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
