@extends('layouts.app')

@section('content')
    <br><br>

    <a href="{{route('user.create')}}" CLASS="btn btn-primary">CREAR USUARIO</a>
    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
            <tr>
                <th>NOMBRES</th>
                <th>APELLIDOS</th>
                <th>CORREO</th>
                <th>TELEFONO</th>
            </tr>
            </thead>
            <tbody>
            @foreach($users as $user)
            <tr>
                <td>{{$user->nombres}}</td>
                <td>{{$user->apellidos}}</td>
                <td>{{$user->correo}}</td>
                <td>{{$user->telefono}}</td>
                <td>
                    <a href="" CLASS="btn btn-danger">ELIMINAR</a>
                    <a href="" class="btn btn-info btn-sm">VER DETALLES</a>
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>

@endsection
