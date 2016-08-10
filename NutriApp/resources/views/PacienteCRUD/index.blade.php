@extends('layouts.app')
@section('content')

    <div class="row">
            <div class="text-center">
                <h2>Datos de pacientes</h2>
            </div>

    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-danger">
                    <div class="panel-heading">
                        <div class="dropdown">
                            <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                Mantenimiento
                                <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                <li><a href="{{ route('pacienteCRUD.create') }}">Nuevo paciente</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something else here</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="panel-body">
                        @if ($message = Session::get('success'))
                            <div class="alert alert-success">
                                <p>{{ $message }}</p>
                            </div>

                        @endif

                        <table class="table table-bordered">
                            <tr>
                                <th>No</th>
                                <th>Nombre</th>
                                <th>Apellidos</th>
                                <th>Cedula</th>
                                <th>Telefono</th>
                                <th>Direccion</th>
                                <th>Email</th>
                                <th width="280px">Action</th>
                            </tr>

                            @foreach ($pacientes as $key => $paciente)
                                <tr>
                                    <td>{{ ++$i }}</td>
                                    <td>{{ $paciente->nombre }}</td>
                                    <td>{{ $paciente->apellido }}</td>
                                    <td>{{ $paciente->cedula }}</td>
                                    <td>{{ $paciente->telefono }}</td>
                                    <td>{{ $paciente->direccion }}</td>
                                    <td>{{ $paciente->email }}</td>
                                    <td>
                                        <a class="btn btn-info" href="{{ route('pacienteCRUD.show',$paciente->id) }}">Show</a>
                                        <a class="btn btn-primary" href="{{ route('pacienteCRUD.edit',$paciente->id) }}">Edit</a>
                                        {!! Form::open(['method' => 'DELETE','route' => ['pacienteCRUD.destroy', $paciente->id],'style'=>'display:inline']) !!}
                                        {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                                        {!! Form::close() !!}
                                    </td>
                                </tr>
                            @endforeach

                        </table>

                        {!! $pacientes->render() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection