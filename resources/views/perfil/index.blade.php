@extends('layouts.app')

@section('template_title')
    Perfil
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                        <div class="panel-heading">
	                        <h3 class="panel-title">Categoria </h3>
                        </div>

                             <div class="float-right">
                                <a href="{{ route('perfils.create') }}" class="btn btn-primary float-right"  data-placement="left">
                                  {{ __('Crear Nuevo') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Perfil</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($perfils as $perfil)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $perfil->Perfil }}</td>

                                            <td>
                                                <form action="{{ route('perfils.destroy',$perfil->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-success" href="{{ route('perfils.edit',$perfil->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Editar') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> {{ __('Eliminar') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $perfils->links() !!}
            </div>
        </div>
    </div>
@endsection
