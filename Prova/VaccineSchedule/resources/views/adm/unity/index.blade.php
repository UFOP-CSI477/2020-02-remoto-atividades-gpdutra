@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title"><strong>Vacinas</strong></h3>
        <a style="float:right; margin-top: -8px; margin-bottom: -9px; margin-right: 35px" href="/unity/create" class="btn btn-success"><i class="fas fa-plus"></i> Adicionar Unidade</a>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <table class="table table-bordered">
            <thead>
                <tr>                    
                    <th>Nome</th>
                    <th>Bairro</th>
                    <th>Cidade</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($unities as $unity)
                <tr>
                    <td>{{$unity->nome}}</td>
                    <td>{{$unity->bairro}}</td>
                    <td>{{$unity->cidade}}</td>
                    <td>
                        <form action="/unity/{{$unity->id}}" method="post">
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="badge bg-danger" id="btn-submit" name="btn-submit">Deletar</button>
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