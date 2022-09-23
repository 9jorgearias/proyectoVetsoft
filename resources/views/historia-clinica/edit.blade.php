@extends('layouts.app')

@section('template_title')
    Update Historia Clinica
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Update Historia Clinica</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('historia-clinicas.update', $historiaClinica->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('historia-clinica.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
