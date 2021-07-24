@extends('layouts.app')


@section('content')


<!-- Content Wrapper. Contains page content -->
<div>
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">

            <div class="col-xs-12 col-sm-8 col-md-8 text-justify lead">
                <h4>

                </h4>
                <br>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">

            <div class="row">

                <div class="col-md-12">

                    <!-- general form elements disabled -->
                    <div class="card card-warning">
                        <div class="card-header">
                            <h3 class="card-title">Listado de Clientes.</h3>
                            <div id="app">

                            </div>
                            <script src="{{ asset('js/app.js') }}">

                            </script>
                        </div>

                        <!-- /.card-header -->
                        <div class="card-body">

                            <table id="clientes" class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nombre</th>
                                        <th>Apellido</th>
                                        <th class="min-tablet">Dirección</th>
                                        <th class="min-tablet">Correo Electronico</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($clientes as $cliente)
                                    <tr>
                                        <td>
                                            {{ $cliente->id }}
                                        </td>
                                        <td>
                                            {{ $cliente->nombre }}
                                        </td>
                                        <td>
                                            {{ $cliente->apellido }}
                                        </td>
                                        <td>
                                            {{ $cliente->direccion }}
                                        </td>
                                        <td>
                                            {{ $cliente->correoelectronico }}
                                        </td>



                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>

                </div>
                <!--/.col (right) -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>



@endsection
