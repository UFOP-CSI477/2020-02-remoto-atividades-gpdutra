@extends('layouts.app')

@section('content')
<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Cadastro de Sala</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form method="post" action="/room">
        @csrf
        <div class="card-body">
            <div class="form-group">
                <label for="roomName">Nome da Sala</label>
                <input type="text" class="form-control" id="roomName" name="roomName">
            </div>
        </div>
        <!-- /.card-body -->

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Cadastre</button>
        </div>
    </form>
</div>
@endsection