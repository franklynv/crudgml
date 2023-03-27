@extends('layouts.app')

@section('template_title')
    {{ $usuario->name ?? "{{ __('Show') Usuario" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Usuario</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('usuarios.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $usuario->Nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Apellido:</strong>
                            {{ $usuario->Apellido }}
                        </div>
                        <div class="form-group">
                            <strong>Pais:</strong>
                            {{ $usuario->Pais }}
                        </div>
                        <div class="form-group">
                            <strong>Direccion:</strong>
                            {{ $usuario->Direccion }}
                        </div>
                        <div class="form-group">
                            <strong>Celular:</strong>
                            {{ $usuario->Celular }}
                        </div>
                        <div class="form-group">
                            <strong>Numdoc:</strong>
                            {{ $usuario->NumDoc }}
                        </div>
                        <div class="form-group">
                            <strong>Email:</strong>
                            {{ $usuario->Email }}
                        </div>
                        <div class="form-group">
                            <strong>Perfils:</strong>
                            {{ $usuario->Perfils }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
