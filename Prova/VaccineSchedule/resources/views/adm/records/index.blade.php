@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title"><strong>Vacinas</strong></h3>
        <a style="float:right; margin-top: -8px; margin-bottom: -9px; margin-right: 35px" href="/records/create" class="btn btn-success"><i class="fas fa-plus"></i> Adicionar registro</a>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <table class="table table-bordered">
            <thead>
                <tr>                    
                    <th>Pessoa</th>
                    <th>Unidade</th>
                    <th>Vacina</th>
                    <th>Dose</th>
                    <th>Data de aplicação</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($records as $record)
                <tr>
                    <td>{{$record->pessoa->nome}}</td>
                    <td>{{$record->unidade->nome}}</td>
                    <td>{{$record->vacina->nome}}</td>
                    <td>{{$record->dose}}</td>
                    <td>{{$record->data}}</td>
                    <td>
                        <form action="/records/{{$record->id}}" method="post">
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="badge bg-danger" id="btn-submit" name="btn-submit">Deletar</button>
                            <a href="/records/{{$record->id}}/edit" class="badge bg-primary">Editar</a>
                        </form>
                    </td>
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
@endsection