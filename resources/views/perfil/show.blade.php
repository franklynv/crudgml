@extends('layouts.app')

@section('template_title')
    {{ $perfil->name ?? "{{ __('Show') Perfil" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Perfil</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('perfils.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Perfil:</strong>
                            {{ $perfil->Perfil }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
