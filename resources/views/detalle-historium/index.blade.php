@extends('layouts.app')

@section('template_title')
    Detalle Historium
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Detalle Historium') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('detalle-historia.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Idnotas</th>
										<th>Responsable</th>
										<th>Fecha</th>
										<th>Observaciones</th>
										<th>Idhistoria</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($detalleHistoria as $detalleHistorium)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $detalleHistorium->idNotas }}</td>
											<td>{{ $detalleHistorium->Responsable }}</td>
											<td>{{ $detalleHistorium->Fecha }}</td>
											<td>{{ $detalleHistorium->Observaciones }}</td>
											<td>{{ $detalleHistorium->idHistoria }}</td>

                                            <td>
                                                <form action="{{ route('detalle-historia.destroy',$detalleHistorium->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('detalle-historia.show',$detalleHistorium->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('detalle-historia.edit',$detalleHistorium->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
                {!! $detalleHistoria->links() !!}
            </div>
        </div>
    </div>
@endsection
