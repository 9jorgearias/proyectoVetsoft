<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('idHistoria') }}
            {{ Form::text('idHistoria', $historiaClinica->idHistoria, ['class' => 'form-control' . ($errors->has('idHistoria') ? ' is-invalid' : ''), 'placeholder' => 'Idhistoria']) }}
            {!! $errors->first('idHistoria', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Fecha') }}
            {{ Form::text('Fecha', $historiaClinica->Fecha, ['class' => 'form-control' . ($errors->has('Fecha') ? ' is-invalid' : ''), 'placeholder' => 'Fecha']) }}
            {!! $errors->first('Fecha', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Diagnostico') }}
            {{ Form::text('Diagnostico', $historiaClinica->Diagnostico, ['class' => 'form-control' . ($errors->has('Diagnostico') ? ' is-invalid' : ''), 'placeholder' => 'Diagnostico']) }}
            {!! $errors->first('Diagnostico', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Tratamiento') }}
            {{ Form::text('Tratamiento', $historiaClinica->Tratamiento, ['class' => 'form-control' . ($errors->has('Tratamiento') ? ' is-invalid' : ''), 'placeholder' => 'Tratamiento']) }}
            {!! $errors->first('Tratamiento', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Medicamentos') }}
            {{ Form::text('Medicamentos', $historiaClinica->Medicamentos, ['class' => 'form-control' . ($errors->has('Medicamentos') ? ' is-invalid' : ''), 'placeholder' => 'Medicamentos']) }}
            {!! $errors->first('Medicamentos', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Motivo de consulta') }}
            {{ Form::text('Motivo de consulta', $historiaClinica->Motivo de consulta, ['class' => 'form-control' . ($errors->has('Motivo de consulta') ? ' is-invalid' : ''), 'placeholder' => 'Motivo De Consulta']) }}
            {!! $errors->first('Motivo de consulta', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Dieta') }}
            {{ Form::text('Dieta', $historiaClinica->Dieta, ['class' => 'form-control' . ($errors->has('Dieta') ? ' is-invalid' : ''), 'placeholder' => 'Dieta']) }}
            {!! $errors->first('Dieta', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Vacunacion') }}
            {{ Form::text('Vacunacion', $historiaClinica->Vacunacion, ['class' => 'form-control' . ($errors->has('Vacunacion') ? ' is-invalid' : ''), 'placeholder' => 'Vacunacion']) }}
            {!! $errors->first('Vacunacion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Desparacitacion') }}
            {{ Form::text('Desparacitacion', $historiaClinica->Desparacitacion, ['class' => 'form-control' . ($errors->has('Desparacitacion') ? ' is-invalid' : ''), 'placeholder' => 'Desparacitacion']) }}
            {!! $errors->first('Desparacitacion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Estado Reproductivo') }}
            {{ Form::text('Estado Reproductivo', $historiaClinica->Estado Reproductivo, ['class' => 'form-control' . ($errors->has('Estado Reproductivo') ? ' is-invalid' : ''), 'placeholder' => 'Estado Reproductivo']) }}
            {!! $errors->first('Estado Reproductivo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Peso') }}
            {{ Form::text('Peso', $historiaClinica->Peso, ['class' => 'form-control' . ($errors->has('Peso') ? ' is-invalid' : ''), 'placeholder' => 'Peso']) }}
            {!! $errors->first('Peso', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Mucosas') }}
            {{ Form::text('Mucosas', $historiaClinica->Mucosas, ['class' => 'form-control' . ($errors->has('Mucosas') ? ' is-invalid' : ''), 'placeholder' => 'Mucosas']) }}
            {!! $errors->first('Mucosas', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Turgencia') }}
            {{ Form::text('Turgencia', $historiaClinica->Turgencia, ['class' => 'form-control' . ($errors->has('Turgencia') ? ' is-invalid' : ''), 'placeholder' => 'Turgencia']) }}
            {!! $errors->first('Turgencia', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Pulso') }}
            {{ Form::text('Pulso', $historiaClinica->Pulso, ['class' => 'form-control' . ($errors->has('Pulso') ? ' is-invalid' : ''), 'placeholder' => 'Pulso']) }}
            {!! $errors->first('Pulso', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Otros') }}
            {{ Form::text('Otros', $historiaClinica->Otros, ['class' => 'form-control' . ($errors->has('Otros') ? ' is-invalid' : ''), 'placeholder' => 'Otros']) }}
            {!! $errors->first('Otros', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Anamnesis') }}
            {{ Form::text('Anamnesis', $historiaClinica->Anamnesis, ['class' => 'form-control' . ($errors->has('Anamnesis') ? ' is-invalid' : ''), 'placeholder' => 'Anamnesis']) }}
            {!! $errors->first('Anamnesis', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Enfermedades o procedimientos anteriores') }}
            {{ Form::text('Enfermedades o procedimientos anteriores', $historiaClinica->Enfermedades o procedimientos anteriores, ['class' => 'form-control' . ($errors->has('Enfermedades o procedimientos anteriores') ? ' is-invalid' : ''), 'placeholder' => 'Enfermedades O Procedimientos Anteriores']) }}
            {!! $errors->first('Enfermedades o procedimientos anteriores', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Lista Problemas') }}
            {{ Form::text('Lista Problemas', $historiaClinica->Lista Problemas, ['class' => 'form-control' . ($errors->has('Lista Problemas') ? ' is-invalid' : ''), 'placeholder' => 'Lista Problemas']) }}
            {!! $errors->first('Lista Problemas', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Diagnosticos diferenciales') }}
            {{ Form::text('Diagnosticos diferenciales', $historiaClinica->Diagnosticos diferenciales, ['class' => 'form-control' . ($errors->has('Diagnosticos diferenciales') ? ' is-invalid' : ''), 'placeholder' => 'Diagnosticos Diferenciales']) }}
            {!! $errors->first('Diagnosticos diferenciales', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Plan diagnostico') }}
            {{ Form::text('Plan diagnostico', $historiaClinica->Plan diagnostico, ['class' => 'form-control' . ($errors->has('Plan diagnostico') ? ' is-invalid' : ''), 'placeholder' => 'Plan Diagnostico']) }}
            {!! $errors->first('Plan diagnostico', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Diagnostico presuntivo') }}
            {{ Form::text('Diagnostico presuntivo', $historiaClinica->Diagnostico presuntivo, ['class' => 'form-control' . ($errors->has('Diagnostico presuntivo') ? ' is-invalid' : ''), 'placeholder' => 'Diagnostico Presuntivo']) }}
            {!! $errors->first('Diagnostico presuntivo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Diagnostico definitivo') }}
            {{ Form::text('Diagnostico definitivo', $historiaClinica->Diagnostico definitivo, ['class' => 'form-control' . ($errors->has('Diagnostico definitivo') ? ' is-invalid' : ''), 'placeholder' => 'Diagnostico Definitivo']) }}
            {!! $errors->first('Diagnostico definitivo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Pronostico') }}
            {{ Form::text('Pronostico', $historiaClinica->Pronostico, ['class' => 'form-control' . ($errors->has('Pronostico') ? ' is-invalid' : ''), 'placeholder' => 'Pronostico']) }}
            {!! $errors->first('Pronostico', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Plan terapeutico') }}
            {{ Form::text('Plan terapeutico', $historiaClinica->Plan terapeutico, ['class' => 'form-control' . ($errors->has('Plan terapeutico') ? ' is-invalid' : ''), 'placeholder' => 'Plan Terapeutico']) }}
            {!! $errors->first('Plan terapeutico', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Observaciones') }}
            {{ Form::text('Observaciones', $historiaClinica->Observaciones, ['class' => 'form-control' . ($errors->has('Observaciones') ? ' is-invalid' : ''), 'placeholder' => 'Observaciones']) }}
            {!! $errors->first('Observaciones', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Tratamiento al diagnostico') }}
            {{ Form::text('Tratamiento al diagnostico', $historiaClinica->Tratamiento al diagnostico, ['class' => 'form-control' . ($errors->has('Tratamiento al diagnostico') ? ' is-invalid' : ''), 'placeholder' => 'Tratamiento Al Diagnostico']) }}
            {!! $errors->first('Tratamiento al diagnostico', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Estado') }}
            {{ Form::text('Estado', $historiaClinica->Estado, ['class' => 'form-control' . ($errors->has('Estado') ? ' is-invalid' : ''), 'placeholder' => 'Estado']) }}
            {!! $errors->first('Estado', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Actitud') }}
            {{ Form::text('Actitud', $historiaClinica->Actitud, ['class' => 'form-control' . ($errors->has('Actitud') ? ' is-invalid' : ''), 'placeholder' => 'Actitud']) }}
            {!! $errors->first('Actitud', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Hidratacion') }}
            {{ Form::text('Hidratacion', $historiaClinica->Hidratacion, ['class' => 'form-control' . ($errors->has('Hidratacion') ? ' is-invalid' : ''), 'placeholder' => 'Hidratacion']) }}
            {!! $errors->first('Hidratacion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Estado nutricional') }}
            {{ Form::text('Estado nutricional', $historiaClinica->Estado nutricional, ['class' => 'form-control' . ($errors->has('Estado nutricional') ? ' is-invalid' : ''), 'placeholder' => 'Estado Nutricional']) }}
            {!! $errors->first('Estado nutricional', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Modulos superficiales') }}
            {{ Form::text('Modulos superficiales', $historiaClinica->Modulos superficiales, ['class' => 'form-control' . ($errors->has('Modulos superficiales') ? ' is-invalid' : ''), 'placeholder' => 'Modulos Superficiales']) }}
            {!! $errors->first('Modulos superficiales', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Sistema cardiovascular') }}
            {{ Form::text('Sistema cardiovascular', $historiaClinica->Sistema cardiovascular, ['class' => 'form-control' . ($errors->has('Sistema cardiovascular') ? ' is-invalid' : ''), 'placeholder' => 'Sistema Cardiovascular']) }}
            {!! $errors->first('Sistema cardiovascular', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Sistema respiratorio') }}
            {{ Form::text('Sistema respiratorio', $historiaClinica->Sistema respiratorio, ['class' => 'form-control' . ($errors->has('Sistema respiratorio') ? ' is-invalid' : ''), 'placeholder' => 'Sistema Respiratorio']) }}
            {!! $errors->first('Sistema respiratorio', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Sistema digestivo') }}
            {{ Form::text('Sistema digestivo', $historiaClinica->Sistema digestivo, ['class' => 'form-control' . ($errors->has('Sistema digestivo') ? ' is-invalid' : ''), 'placeholder' => 'Sistema Digestivo']) }}
            {!! $errors->first('Sistema digestivo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Sistema reproductivo') }}
            {{ Form::text('Sistema reproductivo', $historiaClinica->Sistema reproductivo, ['class' => 'form-control' . ($errors->has('Sistema reproductivo') ? ' is-invalid' : ''), 'placeholder' => 'Sistema Reproductivo']) }}
            {!! $errors->first('Sistema reproductivo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Sistema urinario') }}
            {{ Form::text('Sistema urinario', $historiaClinica->Sistema urinario, ['class' => 'form-control' . ($errors->has('Sistema urinario') ? ' is-invalid' : ''), 'placeholder' => 'Sistema Urinario']) }}
            {!! $errors->first('Sistema urinario', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Sistema nervioso') }}
            {{ Form::text('Sistema nervioso', $historiaClinica->Sistema nervioso, ['class' => 'form-control' . ($errors->has('Sistema nervioso') ? ' is-invalid' : ''), 'placeholder' => 'Sistema Nervioso']) }}
            {!! $errors->first('Sistema nervioso', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Sistema musculo-esqueletico') }}
            {{ Form::text('Sistema musculo-esqueletico', $historiaClinica->Sistema musculo-esqueletico, ['class' => 'form-control' . ($errors->has('Sistema musculo-esqueletico') ? ' is-invalid' : ''), 'placeholder' => 'Sistema Musculo-Esqueletico']) }}
            {!! $errors->first('Sistema musculo-esqueletico', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Ojos') }}
            {{ Form::text('Ojos', $historiaClinica->Ojos, ['class' => 'form-control' . ($errors->has('Ojos') ? ' is-invalid' : ''), 'placeholder' => 'Ojos']) }}
            {!! $errors->first('Ojos', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Piel y Anexos') }}
            {{ Form::text('Piel y Anexos', $historiaClinica->Piel y Anexos, ['class' => 'form-control' . ($errors->has('Piel y Anexos') ? ' is-invalid' : ''), 'placeholder' => 'Piel Y Anexos']) }}
            {!! $errors->first('Piel y Anexos', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('idMascota') }}
            {{ Form::text('idMascota', $historiaClinica->idMascota, ['class' => 'form-control' . ($errors->has('idMascota') ? ' is-invalid' : ''), 'placeholder' => 'Idmascota']) }}
            {!! $errors->first('idMascota', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>