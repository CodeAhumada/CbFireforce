@extends('adminlte::page')

@section('title', 'Carro', $carros->name)

@section('content_header')
    <h1>
        Bienvenido al carro {{ $carros->name }} </h1>
    <br>
    @can('carros.destroy')
        <form action="{{ route('carros.destroy', $carros) }}" method="POST">
            @csrf
            @method('delete')
            <button type="submit" class="btn btn-danger">Eliminar Carro</button>
        </form>
    @endcan

@stop

@section('content')
    <div class="wrapper">

        <div class="card-columns">
            <div class="card">
                <img src="{{ asset($carros->file) }}" class="card-img-top" alt="">
            </div>
        </div>
        @can('carros.update')
            <div>
                <h5>Modificar Estado del carro</h5>
                <form action="{{ route('carros.update', $carros) }}" method="POST">
                    @csrf
                    @method('put')

                    <select name="estado">
                        <option style="background-color: rgb(114, 114, 114)" type="text" name="estado" value=" 0">
                            Selecciona un estado</option>
                        <option type="text" name="estado" value="1">Operativo</option>
                        <option type="text" name="estado" value="2">Mantenimiento</option>
                        <option type="text" name="estado" value="3">No operatico</option>
                    </select>
                    @if ($carros->estado == 1)
                        <button type="submit" class="btn btn btn-success btn-sm">Cambiar Estado</button>
                    @endif
                    @if ($carros->estado == 2)
                        <button type="submit" class="btn btn btn-warning btn-sm">Cambiar Estado</button>
                    @endif
                    @if ($carros->estado == 3)
                        <button type="submit" class="btn btn btn-danger btn-sm">Cambiar Estado</button>
                    @endif

                    @if ($carros->estado == 0)
                        <button old="option"type="submit" class="btn btn btn-dark btn-sm">Cambiar Estado</button>
                    @endif
                </form>
            </div>
        @endcan
        <br>

        <form action="{{ route('carros.update', $carros) }}" method="post">
            @csrf
            @method('put')

            <div class="row">
                <div class="col-12">
                    <div class="card">

                        <!-- /.card-header -->

                        <table class="table table-hover text-nowrap card-body table-responsive p-0"">

                            <tr>
                                <th>Patente</th>
                                <th>Denominacion</th>
                                <th>Marca Chasis</th>
                                <th>Modelo Chasis</th>
                                <th>Año</th>
                                <th>Tipo Padron</th>
                                <th>Numero Chasis</th>
                            </tr>

                            <tbody>
                                <tr>
                                    <td>
                                        <input type="text" name="patente"
                                            value="{{ old('patente', $carros->patente) }}">

                                        @error('patente')
                                            <br>
                                            <small>*{{ $message }}</small>
                                            <br>
                                        @enderror
                                    </td>
                                    <td>

                                        <input type="text" name="denominacion"
                                            value="{{ old('denominacion', $carros->marcachasis) }}">
                                    </td>
                                    <td>
                                        <input type="text" name="marcachasis"
                                            value="{{ old('marcachasis', $carros->marcachasis) }}">
                                    </td>
                                    <td>
                                        <input type="text" name="modelochasis"
                                            value="{{ old('modelochasis', $carros->modelochasis) }}">
                                    </td>

                                    <td>
                                        <input type="number" name="año" value={{ $carros->año }}>
                                        </label>
                                    </td>

                                    <td>
                                        <input type="text" name="tipopadron"
                                            value="{{ old('tipopadron', $carros->tipopadron) }}">
                                    </td>

                                    <td>
                                        <input type="text" name="numerochasis"
                                            value="{{ old('numerochasis', $carros->numerochasis) }}">
                                    <td>
                                        @can('carros.update')
                                            <li class="list-inline-item">
                                                <button class="btn btn-success btn-sm rounded-0" type="submit"
                                                    data-toggle="tooltip" data-placement="top" title=""
                                                    data-original-title="Edit"><i class="fa fa-edit"></i></button>
                                            </li>
                                        @endcan
                                    </td>
                                </tr>

                        </table>

                        <!-- /.card-body -->

                    </div>
                </div>

        </form>

        <br>


        <!-- Tabla Ultimos Cambios -->

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <form action="{{ route('carros.update', $carros) }}" method="post">
                        @csrf
                        @method('put')

                        <div class="card-header" style="background-color: rgb(218, 115, 115)">
                            <h3 class="card-title">Ultimos cambios</h3>
                        </div>

                        <!-- /.card-header -->
                        <div class="card-body">
                            <table class="table table-hover text-nowrap card-body table-responsive p-0">
                                <thead>
                                    <tr>
                                        <th>Aceite de Motor</th>
                                        <th>Aceite de Caja</th>
                                        <th>Liquido Refrigerante</th>
                                        <th>Bateria</th>
                                        <th>Neumático D</th>
                                        <th>Neumático T</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td> <label>
                                                <input type="text" name="aceitedemotor"
                                                    value="{{ old('aceitedemotor', $carros->aceitedemotor) }}">
                                            </label></td>
                                        <td><label>

                                                <input type="text" name="aceitedecaja"
                                                    value="{{ old('aceitedecaja', $carros->aceitedecaja) }}">
                                            </label></td>
                                        <td><label>

                                                <input type="text" name="liquidorefrigerante"
                                                    value="{{ old('liquidorefrigerante', $carros->liquidorefrigerante) }}">
                                            </label></td>
                                        <td><label>

                                                <input type="text" name="bateria"
                                                    value="{{ old('bateria', $carros->bateria) }}">
                                            </label></td>
                                        <td> <label>

                                                <input type="text" name="neumaticosd"
                                                    value="{{ old('neumaticosd', $carros->neumaticosd) }}">
                                            </label></td>
                                        <td><label>

                                                <input type="text" name="neumaticost"
                                                    value="{{ old('neumaticost', $carros->neumaticost) }}">
                                            </label></td>
                                        <td>

                                            @can('carros.update')
                                                <li class="list-inline-item">
                                                    <button class="btn btn-success btn-sm rounded-0" type="submit"
                                                        data-toggle="tooltip" data-placement="top" title=""
                                                        data-original-title="Edit"><i class="fa fa-edit"></i></button>
                                                </li>
                                            @endcan
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <br>

        @can('carros.store2')
            <div class='card'>

                <div class="card-header" style="background-color: #87CEEB">
                    <h3 class="card-title">Crear Bitacora</h3>
                </div>

                <div class="card-body">
                    <form action="{{ route('carros.store2', $carros) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="carro_id" value="{{ $carros->id }}">
                        <label>
                            Fecha De Inicio:

                            <input type="date" name="fechainicio">
                        </label>


                        <label>
                            Tipo:

                            <input type="text" name="tipo">
                        </label>


                        <label>
                            Kilometraje:

                            <input type="text" name="kilometraje">
                        </label>


                        <label>
                            Observacion Inicial:

                            <input type="text" name="obsinicio">
                        </label>


                        <label>
                            Fecha De Termino:

                            <input type="date" name="fechatermino">
                        </label>


                        <label>
                            Observacion De Termino:

                            <input type="text" name="obstermino">
                        </label>

                        <label>
                            Proveedor:

                            <input type="text" name="proveedor">
                        </label>

                        <button type="submit" class="btn btn-primary">Crear Detalle</button>
                    </form>
                </div>
            </div>
            <br>
        @endcan

        <div class='container-fluid card'>
            <div class="card-body">
                <table class="table table-striped" id="detalle">
                    <thead>
                        <tr>
                            <th>FechaInicio</th>
                            <th>Tipo</th>
                            <th>Kilometraje</th>
                            <th>ObserbacionInicial</th>
                            <th>FechaTermino</th>
                            <th>ObservacionFinal</th>
                            <th>Proveedor</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($detallecarros as $detallecarro)
                            @if ($carros->id == $detallecarro->carro_id)
                                <tr>
                                    <td>
                                        {{ $detallecarro->fechainicio }}
                                    </td>
                                    <td>
                                        {{ $detallecarro->tipo }}
                                    </td>
                                    <td>
                                        {{ $detallecarro->kilometraje }}
                                    </td>
                                    <td>
                                        {{ $detallecarro->obsinicio }}
                                    </td>
                                    <td>
                                        {{ $detallecarro->fechatermino }}
                                    </td>
                                    <td>
                                        {{ $detallecarro->obstermino }}
                                    </td>
                                    <td>
                                        {{ $detallecarro->proveedor }}
                                    </td>
                                </tr>
                            @endif
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@stop





@section('css')

    <link href="{{ asset('Css/css.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap4.min.css" />
    <link rel="stylesheet" type="text/css"
        href="https://cdn.datatables.net/responsive/2.3.0/css/responsive.bootstrap4.min.css" />

@stop

@section('js')
    <script type="text/javascript" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap4.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/responsive/2.3.0/js/dataTables.responsive.min.js">
    </script>
    <script type="text/javascript" src="https://cdn.datatables.net/responsive/2.3.0/js/responsive.bootstrap4.min.js">
    </script>

    <script>
        $('#detalle').DataTable({
            "language": {
                "lengthMenu": "Mostrar '_MENU_' Registros por paginas",
                "zeroRecords": "Nada encontrado ",
                "info": "Mostrando la pagina _PAGE_ de _PAGES_",
                "infoEmpty": "No hay registros disponibles",
                "infoFiltered": "(Filtrado de from _MAX_ Registros totales)",
                'search': 'Buscar:',
                'paginate': {
                    'next': 'Siguiente',
                    'previous': 'Anterior'
                }
            }
        });
    </script>
@stop
