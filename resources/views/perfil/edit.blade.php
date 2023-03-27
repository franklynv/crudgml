@extends('layouts.app')

@section('template_title')
    {{ __('Update') }} Perfil
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                        <div class="panel-heading">
	                        <h3 class="panel-title">Actualizar  </h3>
                        </div>
                    <div class="panel-body">
                        <form method="POST" action="{{ route('perfils.update', $perfil->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('perfil.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
