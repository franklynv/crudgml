@extends('layouts.app')

@section('template_title')
    {{ $admin->name ?? "{{ __('Show') Admin" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Admin</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('admins.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $admin->Nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Correo:</strong>
                            {{ $admin->Correo }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
