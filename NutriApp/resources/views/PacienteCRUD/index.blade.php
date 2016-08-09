@extends('layouts.app')
@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Pacientes CRUD</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('pacienteCRUD.create') }}"> Create New Paciente</a>
            </div>
        </div>
    </div>

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

@endsection