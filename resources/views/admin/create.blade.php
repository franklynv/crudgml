@extends('layouts.app')

@section('template_title')
    {{ __('Create') }} Admin
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                <div class="panel-heading">
	                        <h3 class="panel-title">Crear Nuevo </h3>
                        </div>
                    <div class="panel-body">
                        <form method="POST" action="{{ route('admins.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('admin.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
