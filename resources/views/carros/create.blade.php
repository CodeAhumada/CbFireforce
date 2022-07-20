@extends('adminlte::page')

@section('title', 'Carro create')

@section('content_header')
    <h1>En esta pagina puedes crear carros </h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">


            <form action="{{ route('carros.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <label>
                    Sucursal:
                    <select type="text" name="sucursal" value="{{ old('sucursal') }}">
                        <option value="1era Compañía">1era Compañía</option>
                        <option value="2da Compañía">2da Compañía</option>
                        <option value="3ra Compañía">3ra Compañía</option>
                        <option value="4ta Compañía">4ta Compañía</option>
                        <option value="5ta Compañía">5ta Compañía</option>
                        <option value="6ta Compañía">6ta Compañía</option>
                        <option value="7ma Compañía">7ma Compañía</option>
                        <option value="8va Compañía">8va Compañía</option>
                        <option value="10ma Compañía">10ma Compañía</option>
                        <option value="Comandancia">Comandancia</option>
                    </select>

                </label>
                @error('sucursal')
                    <br>
                    <small>*{{ $message }}</small>
                    <br>
                @enderror

                <br>
                <label>
                    Nombre:
                    <input type="text" name="name" value="{{ old('name') }}">
                </label>
                @error('name')
                    <br>
                    <small>*{{ $message }}</small>
                    <br>
                @enderror
                <br>
                <input type="file" name="file" id="" accept="image/*">
                @error('file')
                <small class="text-danger">{{$message}}</small>
                @enderror
                <br>
                <br>
                <button type="submit" class="btn btn-primary">Crear Carro</button>
            </form>
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script>
        console.log('Hi!');
    </script>
@stop
