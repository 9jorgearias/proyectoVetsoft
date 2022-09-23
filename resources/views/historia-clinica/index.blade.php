@extends('layouts.app')

@section('template_title')
    Historia Clinica
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Historia Clinica') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('historia-clinicas.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Idhistoria</th>
										<th>Fecha</th>
										<th>Diagnostico</th>
										<th>Tratamiento</th>
										<th>Medicamentos</th>
										<th>Motivo De Consulta</th>
										<th>Dieta</th>
										<th>Vacunacion</th>
										<th>Desparacitacion</th>
										<th>Estado Reproductivo</th>
										<th>Peso</th>
										<th>Mucosas</th>
										<th>Turgencia</th>
										<th>Pulso</th>
										<th>Otros</th>
										<th>Anamnesis</th>
										<th>Enfermedades O Procedimientos Anteriores</th>
										<th>Lista Problemas</th>
										<th>Diagnosticos Diferenciales</th>
										<th>Plan Diagnostico</th>
										<th>Diagnostico Presuntivo</th>
										<th>Diagnostico Definitivo</th>
										<th>Pronostico</th>
										<th>Plan Terapeutico</th>
										<th>Observaciones</th>
										<th>Tratamiento Al Diagnostico</th>
										<th>Estado</th>
										<th>Actitud</th>
										<th>Hidratacion</th>
										<th>Estado Nutricional</th>
										<th>Modulos Superficiales</th>
										<th>Sistema Cardiovascular</th>
										<th>Sistema Respiratorio</th>
										<th>Sistema Digestivo</th>
										<th>Sistema Reproductivo</th>
										<th>Sistema Urinario</th>
										<th>Sistema Nervioso</th>
										<th>Sistema Musculo-Esqueletico</th>
										<th>Ojos</th>
										<th>Piel Y Anexos</th>
										<th>Idmascota</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($historiaClinicas as $historiaClinica)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $historiaClinica->idHistoria }}</td>
											<td>{{ $historiaClinica->Fecha }}</td>
											<td>{{ $historiaClinica->Diagnostico }}</td>
											<td>{{ $historiaClinica->Tratamiento }}</td>
											<td>{{ $historiaClinica->Medicamentos }}</td>
											<td>{{ $historiaClinica->Motivo de consulta }}</td>
											<td>{{ $historiaClinica->Dieta }}</td>
											<td>{{ $historiaClinica->Vacunacion }}</td>
											<td>{{ $historiaClinica->Desparacitacion }}</td>
											<td>{{ $historiaClinica->Estado Reproductivo }}</td>
											<td>{{ $historiaClinica->Peso }}</td>
											<td>{{ $historiaClinica->Mucosas }}</td>
											<td>{{ $historiaClinica->Turgencia }}</td>
											<td>{{ $historiaClinica->Pulso }}</td>
											<td>{{ $historiaClinica->Otros }}</td>
											<td>{{ $historiaClinica->Anamnesis }}</td>
											<td>{{ $historiaClinica->Enfermedades o procedimientos anteriores }}</td>
											<td>{{ $historiaClinica->Lista Problemas }}</td>
											<td>{{ $historiaClinica->Diagnosticos diferenciales }}</td>
											<td>{{ $historiaClinica->Plan diagnostico }}</td>
											<td>{{ $historiaClinica->Diagnostico presuntivo }}</td>
											<td>{{ $historiaClinica->Diagnostico definitivo }}</td>
											<td>{{ $historiaClinica->Pronostico }}</td>
											<td>{{ $historiaClinica->Plan terapeutico }}</td>
											<td>{{ $historiaClinica->Observaciones }}</td>
											<td>{{ $historiaClinica->Tratamiento al diagnostico }}</td>
											<td>{{ $historiaClinica->Estado }}</td>
											<td>{{ $historiaClinica->Actitud }}</td>
											<td>{{ $historiaClinica->Hidratacion }}</td>
											<td>{{ $historiaClinica->Estado nutricional }}</td>
											<td>{{ $historiaClinica->Modulos superficiales }}</td>
											<td>{{ $historiaClinica->Sistema cardiovascular }}</td>
											<td>{{ $historiaClinica->Sistema respiratorio }}</td>
											<td>{{ $historiaClinica->Sistema digestivo }}</td>
											<td>{{ $historiaClinica->Sistema reproductivo }}</td>
											<td>{{ $historiaClinica->Sistema urinario }}</td>
											<td>{{ $historiaClinica->Sistema nervioso }}</td>
											<td>{{ $historiaClinica->Sistema musculo-esqueletico }}</td>
											<td>{{ $historiaClinica->Ojos }}</td>
											<td>{{ $historiaClinica->Piel y Anexos }}</td>
											<td>{{ $historiaClinica->idMascota }}</td>

                                            <td>
                                                <form action="{{ route('historia-clinicas.destroy',$historiaClinica->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('historia-clinicas.show',$historiaClinica->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('historia-clinicas.edit',$historiaClinica->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $historiaClinicas->links() !!}
            </div>
        </div>
    </div>
@endsection
