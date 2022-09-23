@extends('layouts.app')

@section('template_title')
    {{ $historiaClinica->name ?? 'Show Historia Clinica' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Historia Clinica</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('historia-clinicas.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Idhistoria:</strong>
                            {{ $historiaClinica->idHistoria }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha:</strong>
                            {{ $historiaClinica->Fecha }}
                        </div>
                        <div class="form-group">
                            <strong>Diagnostico:</strong>
                            {{ $historiaClinica->Diagnostico }}
                        </div>
                        <div class="form-group">
                            <strong>Tratamiento:</strong>
                            {{ $historiaClinica->Tratamiento }}
                        </div>
                        <div class="form-group">
                            <strong>Medicamentos:</strong>
                            {{ $historiaClinica->Medicamentos }}
                        </div>
                        <div class="form-group">
                            <strong>Motivo De Consulta:</strong>
                            {{ $historiaClinica->Motivo de consulta }}
                        </div>
                        <div class="form-group">
                            <strong>Dieta:</strong>
                            {{ $historiaClinica->Dieta }}
                        </div>
                        <div class="form-group">
                            <strong>Vacunacion:</strong>
                            {{ $historiaClinica->Vacunacion }}
                        </div>
                        <div class="form-group">
                            <strong>Desparacitacion:</strong>
                            {{ $historiaClinica->Desparacitacion }}
                        </div>
                        <div class="form-group">
                            <strong>Estado Reproductivo:</strong>
                            {{ $historiaClinica->Estado Reproductivo }}
                        </div>
                        <div class="form-group">
                            <strong>Peso:</strong>
                            {{ $historiaClinica->Peso }}
                        </div>
                        <div class="form-group">
                            <strong>Mucosas:</strong>
                            {{ $historiaClinica->Mucosas }}
                        </div>
                        <div class="form-group">
                            <strong>Turgencia:</strong>
                            {{ $historiaClinica->Turgencia }}
                        </div>
                        <div class="form-group">
                            <strong>Pulso:</strong>
                            {{ $historiaClinica->Pulso }}
                        </div>
                        <div class="form-group">
                            <strong>Otros:</strong>
                            {{ $historiaClinica->Otros }}
                        </div>
                        <div class="form-group">
                            <strong>Anamnesis:</strong>
                            {{ $historiaClinica->Anamnesis }}
                        </div>
                        <div class="form-group">
                            <strong>Enfermedades O Procedimientos Anteriores:</strong>
                            {{ $historiaClinica->Enfermedades o procedimientos anteriores }}
                        </div>
                        <div class="form-group">
                            <strong>Lista Problemas:</strong>
                            {{ $historiaClinica->Lista Problemas }}
                        </div>
                        <div class="form-group">
                            <strong>Diagnosticos Diferenciales:</strong>
                            {{ $historiaClinica->Diagnosticos diferenciales }}
                        </div>
                        <div class="form-group">
                            <strong>Plan Diagnostico:</strong>
                            {{ $historiaClinica->Plan diagnostico }}
                        </div>
                        <div class="form-group">
                            <strong>Diagnostico Presuntivo:</strong>
                            {{ $historiaClinica->Diagnostico presuntivo }}
                        </div>
                        <div class="form-group">
                            <strong>Diagnostico Definitivo:</strong>
                            {{ $historiaClinica->Diagnostico definitivo }}
                        </div>
                        <div class="form-group">
                            <strong>Pronostico:</strong>
                            {{ $historiaClinica->Pronostico }}
                        </div>
                        <div class="form-group">
                            <strong>Plan Terapeutico:</strong>
                            {{ $historiaClinica->Plan terapeutico }}
                        </div>
                        <div class="form-group">
                            <strong>Observaciones:</strong>
                            {{ $historiaClinica->Observaciones }}
                        </div>
                        <div class="form-group">
                            <strong>Tratamiento Al Diagnostico:</strong>
                            {{ $historiaClinica->Tratamiento al diagnostico }}
                        </div>
                        <div class="form-group">
                            <strong>Estado:</strong>
                            {{ $historiaClinica->Estado }}
                        </div>
                        <div class="form-group">
                            <strong>Actitud:</strong>
                            {{ $historiaClinica->Actitud }}
                        </div>
                        <div class="form-group">
                            <strong>Hidratacion:</strong>
                            {{ $historiaClinica->Hidratacion }}
                        </div>
                        <div class="form-group">
                            <strong>Estado Nutricional:</strong>
                            {{ $historiaClinica->Estado nutricional }}
                        </div>
                        <div class="form-group">
                            <strong>Modulos Superficiales:</strong>
                            {{ $historiaClinica->Modulos superficiales }}
                        </div>
                        <div class="form-group">
                            <strong>Sistema Cardiovascular:</strong>
                            {{ $historiaClinica->Sistema cardiovascular }}
                        </div>
                        <div class="form-group">
                            <strong>Sistema Respiratorio:</strong>
                            {{ $historiaClinica->Sistema respiratorio }}
                        </div>
                        <div class="form-group">
                            <strong>Sistema Digestivo:</strong>
                            {{ $historiaClinica->Sistema digestivo }}
                        </div>
                        <div class="form-group">
                            <strong>Sistema Reproductivo:</strong>
                            {{ $historiaClinica->Sistema reproductivo }}
                        </div>
                        <div class="form-group">
                            <strong>Sistema Urinario:</strong>
                            {{ $historiaClinica->Sistema urinario }}
                        </div>
                        <div class="form-group">
                            <strong>Sistema Nervioso:</strong>
                            {{ $historiaClinica->Sistema nervioso }}
                        </div>
                        <div class="form-group">
                            <strong>Sistema Musculo-Esqueletico:</strong>
                            {{ $historiaClinica->Sistema musculo-esqueletico }}
                        </div>
                        <div class="form-group">
                            <strong>Ojos:</strong>
                            {{ $historiaClinica->Ojos }}
                        </div>
                        <div class="form-group">
                            <strong>Piel Y Anexos:</strong>
                            {{ $historiaClinica->Piel y Anexos }}
                        </div>
                        <div class="form-group">
                            <strong>Idmascota:</strong>
                            {{ $historiaClinica->idMascota }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
