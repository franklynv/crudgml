
<div class="box box-info padding-1">
    <div class="box-body">
        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    {{ Form::label('Nombre') }}
                    {{ Form::text('Nombre', $usuario->Nombre, ['class' => 'form-control' . ($errors->has('Nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre','maxlength'=>'100' ]) }}
                    {!! $errors->first('Nombre', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    {{ Form::label('Apellido') }}
                    {{ Form::text('Apellido', $usuario->Apellido, ['class' => 'form-control' . ($errors->has('Apellido') ? ' is-invalid' : ''), 'placeholder' => 'Apellido','maxlength'=>'100']) }}
                    {!! $errors->first('Apellido', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4">
                <div class="form-group">
                    {{ Form::label('Pais') }}
                    {{ Form::select('Pais', $countryNames ,$usuario->Pais, ['class' => 'form-control' . ($errors->has('Pais') ? ' is-invalid' : ''), 'placeholder' => 'Pais']) }}
                    {!! $errors->first('Pais', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                    {{ Form::label('Numero Documento') }}
                    {{ Form::number('NumDoc', $usuario->NumDoc, ['class' => 'form-control' . ($errors->has('NumDoc') ? ' is-invalid' : ''), 'id'=>'NumDoc','placeholder' => 'Numero Documento' ,'maxlength'=>'10']) }}
                    {!! $errors->first('NumDoc', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                    {{ Form::label('Celular') }}
                    {{ Form::number('Celular', $usuario->Celular, ['class' => 'form-control' . ($errors->has('Celular') ? ' is-invalid' : ''), 'placeholder' => 'Celular']) }}
                    {!! $errors->first('Celular', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4">
                <div class="form-group">
                    {{ Form::label('Direccion') }}
                    {{ Form::text('Direccion', $usuario->Direccion, ['class' => 'form-control' . ($errors->has('Direccion') ? ' is-invalid' : ''), 'placeholder' => 'Direccion','maxlength'=>'180']) }}
                    {!! $errors->first('Direccion', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                    {{ Form::label('Email') }}
                    {{ Form::email('Email', $usuario->Email, ['class' => 'form-control' . ($errors->has('Email') ? ' is-invalid' : ''), 'placeholder' => 'Email','maxlength'=>'150']) }}
                    {!! $errors->first('Email', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                    {{ Form::label('Categoria') }}
                    {{ Form::select('Perfils', $perfils,$usuario->Perfils, ['class' => 'form-control' . ($errors->has('Perfils') ? ' is-invalid' : ''), 'placeholder' => 'Categoria']) }}
                    {!! $errors->first('Perfils', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>
        </div>
    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Guardar') }}</button>
    </div>
</div>