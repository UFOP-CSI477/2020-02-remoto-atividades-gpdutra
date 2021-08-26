<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>{{ config('app.name') }}</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous" />

    <link href="{{ mix('css/app.css') }}" rel="stylesheet">

    @yield('third_party_stylesheets')

    @stack('page_css')
</head>


<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        <!-- Main Header -->
        <div class="content-wrapper" style="position: absolute;  left: 20%;  ">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                            <h1 class="m-0" align="center">VaccineSchedule</h1>
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title"><strong>Total geral vacinadas aplicadas</strong></h3>
                    </div>
                    <!-- /.card-header -->
                    <?php
                    $aplicacoes_dose_unica = \App\Models\Registro::all()->where('dose',0);
                    $aplicacoes_primeira_dose = \App\Models\Registro::all()->where('dose',1);
                    $aplicacoes_segunda_dose = \App\Models\Registro::all()->where('dose',2);

                    ?>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Aplicação</th>
                                    <th>Quantidade</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Dose Única</td>
                                    <td>{{count($aplicacoes_dose_unica)}}</td>                                    
                                </tr>
                                <tr>
                                    <td>Primeira Dose</td>
                                    <td>{{count($aplicacoes_primeira_dose)}}</td>                                    
                                </tr>
                                <tr>
                                    <td>Segunda Dose</td>
                                    <td>{{count($aplicacoes_segunda_dose)}}</td>                                    
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer clearfix">
                        <ul class="pagination pagination-sm m-0 float-right">
                            <li class="page-item"><a class="page-link" href="#">«</a></li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">»</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Main content -->
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title"><strong>Total de aplicações por vacinas</strong></h3>
                    </div>
                    <!-- /.card-header -->
                    <?php
                    $vacinas = \App\Models\Vacina::all();

                    ?>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Vacina</th>
                                    <th>Quantidade</th>
                                    <th>Porcentagem</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $total = \App\Models\Registro::all(); ?>
                                @foreach ($vacinas as $vacina)
                                <tr>
                                    <td>{{$vacina->nome}}</td>
                                    <td>{{count($vacina->registros)}}</td>  
                                    <td>{{count($vacina->registros)/count($total)*100}}%</th>                                  
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer clearfix">
                        <ul class="pagination pagination-sm m-0 float-right">
                            <li class="page-item"><a class="page-link" href="#">«</a></li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">»</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Main Footer -->
            <footer class="main-footer">
                <div class="float-right d-none d-sm-block">
                    <b>Version</b> 3.0.5
                </div>
                <strong>Copyright &copy; 2014-2020 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights
                reserved.
            </footer>
        </div>

        <script src="{{ mix('js/app.js') }}" defer></script>

        @yield('third_party_scripts')

        @stack('page_scripts')
</body>

</html>