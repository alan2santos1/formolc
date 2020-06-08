@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Registros</div>
                    <div class="card-body">
                        <a href="{{ url('/registros/create') }}" class="btn btn-success btn-sm" title="Add New registro">
                            <i class="fa fa-plus" aria-hidden="true"></i> Añadir Nuevo
                        </a>

                        <form method="GET" action="{{ url('/registros') }}" accept-charset="UTF-8" class="form-inline my-2 my-lg-0 float-right" role="search">
                            <div class="input-group">
                                <input type="text" class="form-control" name="search" placeholder="Search..." value="{{ request('search') }}">
                                <span class="input-group-append">
                                    <button class="btn btn-secondary" type="submit">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                            </div>
                        </form>

                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th><th>Foto</th><th>Nombre</th><th>Apellido Paterno</th><th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($registros as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>

                                        <!-- poner este código para que linkee la foto -->
                                        <td>
                                            <img src="{{ asset('storage').'/'.$item->Foto }}" alt="" width="200">
                                            </td>
                                        
                                        <td>{{ $item->Nombre }}</td><td>{{ $item->ApellidoPaterno }}</td>
                                        <td>
                                            <a href="{{ url('/registros/' . $item->id) }}" title="View registro"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> Ver</button></a>
                                            <a href="{{ url('/registros/' . $item->id . '/edit') }}" title="Edit registro"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Editar</button></a>

                                            <form method="POST" action="{{ url('/registros' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete registro" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Borrar</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $registros->appends(['search' => Request::get('search')])->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
