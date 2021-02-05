@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <div class="card">
                <div class="card-body">
                    <form action="">
                        @csrf
                        <div class="form-group">
                            <label for="">NOMBRES</label>
                            <input type="text" name="nombres" id="name" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">APELLIDOS</label>
                            <textarea class="form-control" name="apellidos"> </textarea>
                        </div>
                        <div class="form-group">
                            <label for="">CORREO</label>
                            <input type="text" name="correo" id="name" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">TELEFONO</label>
                            <input type="text" name="telefono" id="telefono" class="form-control">
                        </div>
                        <button class="btn btn-danger">CREAR</button>
                        <a href="{{route('user.index')}}">CANCELAR</a>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
