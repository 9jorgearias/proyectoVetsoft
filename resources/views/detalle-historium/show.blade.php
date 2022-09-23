@extends('layouts.app')

@section('template_title')
    {{ $detalleHistorium->name ?? 'Show Detalle Historium' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Detalle Historium</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('detalle-historia.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Idnotas:</strong>
                            {{ $detalleHistorium->idNotas }}
                        </div>
                        <div class="form-group">
                            <strong>Responsable:</strong>
                            {{ $detalleHistorium->Responsable }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha:</strong>
                            {{ $detalleHistorium->Fecha }}
                        </div>
                        <div class="form-group">
                            <strong>Observaciones:</strong>
                            {{ $detalleHistorium->Observaciones }}
                        </div>
                        <div class="form-group">
                            <strong>Idhistoria:</strong>
                            {{ $detalleHistorium->idHistoria }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
