@extends('layouts.app')

@section('content')
<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Cadastro de Pessoas</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form method="post" action="/people">
        @csrf
        @include('adm.peoples.form')

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>
@endsection