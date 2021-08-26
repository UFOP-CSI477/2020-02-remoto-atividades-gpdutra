@extends('layouts.app')

@section('content')
<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Quick Example</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form method="post" action="/vaccine">
        @csrf
        <div class="card-body">
            <div class="form-group">
                <label for="nome">Nome:</label>
                <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome">
            </div>
            <div class="form-group">
                <label for="fabricante">Fabricante:</label>
                <input type="text" class="form-control" id="fabricante" name="fabricante" placeholder="Fabricante">
            </div>
            <div class="form-group">
                <label for="doses">Doses</label>
                <input type="number" class="form-control" id="doses" name="doses" placeholder="Doses">
            </div>
        </div>
        <!-- /.card-body -->

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>
@endsection