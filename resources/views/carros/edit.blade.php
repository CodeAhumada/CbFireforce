@extends('adminlte::page')

@section('title', 'Carro edit')

@section('content_header')
    <h1>En esta pagina puedes editar el carro </h1>
@stop

@section('content')
    <form action="{{route('carros.update', $carros)}}" method="post">
        @csrf
        @method('put')
        <label>
            Sucursal:
            <input type="text" name="sucursal" value="{{old('sucursal', $carros->sucursal)}}">
        </label>
        @error('sucursal')
        <br>
        <small>*{{ $message }}</small>
        <br>
    @enderror
        <br>
        <label>
            Nombre:
            <input type="text" name="name" value="{{old('name', $carros->name)}}">
        </label>
        @error('name')
            <br>
            <small>*{{ $message }}</small>
            <br>
        @enderror
        <br>
        <label>
            Patente:
            <input type="text" name="patente" value="{{old('patente', $carros->patente)}}">
        </label>
        @error('patente')
            <br>
            <small>*{{ $message }}</small>
            <br>
        @enderror
        <br>
        <label>
            Denominacion:
            <input type="text" name="denominacion" value="{{old('denominacion', $carros->marcachasis)}}">
        </label>
        <br>
        <label>
        <label>
            MarcaChasis:
            <input type="text" name="marcachasis" value="{{old('marcachasis', $carros->marcachasis)}}">
        </label>
        <br>
        <label>
            ModeloChasis:
            <input type="text" name="modelochasis" value="{{old('modelochasis', $carros->modelochasis)}}">
        </label>
        <br>
        <label>
            Año:
            <input type="number" name="año" value={{$carros->año}}>
        </label>
        <br>
        <label>
            TipoPadron:
            <input type="text" name="tipopadron" value="{{old('tipopadron', $carros->tipopadron)}}">
        </label>
        <br>
        <label>
            NumeroChasis:
            <input type="text" name="numerochasis" value="{{old('numerochasis', $carros->numerochasis)}}">
        </label>
        <br>
        <label>
            AceiteDeMotor:
            <input type="text" name="aceitedemotor" value="{{old('aceitedemotor', $carros->aceitedemotor)}}">
        </label>
        <br>
        <label>
            AceiteDeCaja:
            <input type="text" name="aceitedecaja" value="{{old('aceitedecaja', $carros->aceitedecaja)}}">
        </label>
        <br>
        <label>
            LiquidoRefrigerante:
            <input type="text" name="liquidorefrigerante" value="{{old('liquidorefrigerante', $carros->liquidorefrigerante)}}">
        </label>
        <br>
        <label>
            Bateria:
            <input type="text" name="bateria" value="{{old('bateria', $carros->bateria)}}">
        </label>
        <br>
        <label>
            NeumaticosD:
            <input type="text" name="neumaticosd" value="{{old('neumaticosd', $carros->neumaticosd)}}">
        </label>
        <br>
        <label>
            NeumaticosT:
            <input type="text" name="neumaticost" value="{{old('neumaticost', $carros->neumaticost)}}">
        </label>
        <br>
        <button type="submit">Actualizar Carro</button>

    </form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script>
        console.log('Hi!');
    </script>
@stop
