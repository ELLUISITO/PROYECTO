@extends('layouts.app')

@section('template_title')
    {{ $ubicacione->name ?? 'Show Ubicacione' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Ubicacione</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('ubicaciones.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Id Restaurantes:</strong>
                            {{ $ubicacione->id_restaurantes }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre Sede:</strong>
                            {{ $ubicacione->nombre_sede }}
                        </div>
                        <div class="form-group">
                            <strong>Departamento:</strong>
                            {{ $ubicacione->departamento }}
                        </div>
                        <div class="form-group">
                            <strong>Municipio:</strong>
                            {{ $ubicacione->municipio }}
                        </div>
                        <div class="form-group">
                            <strong>Codigo Postal:</strong>
                            {{ $ubicacione->codigo_postal }}
                        </div>
                        <div class="form-group">
                            <strong>Barrio:</strong>
                            {{ $ubicacione->barrio }}
                        </div>
                        <div class="form-group">
                            <strong>Direccion:</strong>
                            {{ $ubicacione->direccion }}
                        </div>
                        <div class="form-group">
                            <strong>Anexo:</strong>
                            {{ $ubicacione->anexo }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
