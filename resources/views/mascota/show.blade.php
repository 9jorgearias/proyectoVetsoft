@extends('layouts.app')

@section('template_title')
    {{ $mascota->name ?? 'Show Mascota' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Mascota</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('mascotas.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Idmascota:</strong>
                            {{ $mascota->idMascota }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $mascota->Nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Raza:</strong>
                            {{ $mascota->Raza }}
                        </div>
                        <div class="form-group">
                            <strong>Color:</strong>
                            {{ $mascota->Color }}
                        </div>
                        <div class="form-group">
                            <strong>Peso:</strong>
                            {{ $mascota->Peso }}
                        </div>
                        <div class="form-group">
                            <strong>Especie:</strong>
                            {{ $mascota->Especie }}
                        </div>
                        <div class="form-group">
                            <strong>Edad:</strong>
                            {{ $mascota->Edad }}
                        </div>
                        <div class="form-group">
                            <strong>Sexo:</strong>
                            {{ $mascota->Sexo }}
                        </div>
                        <div class="form-group">
                            <strong>Idcliente:</strong>
                            {{ $mascota->idCliente }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
