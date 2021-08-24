@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Agendamento de Salas</h3>
        <a style="float:right; margin-top: -8px; margin-bottom: -9px; margin-right: 35px" href="/schedule/create" class="btn btn-success"><i class="fas fa-plus"></i> Novo agendamento</a>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th style="width: 10px">#</th>
                    <th>Nome a sala</th>
                    <th>Reunião</th>
                    <th>Professor</th>
                    <th>Data</th>
                    <th style="width: 40px">Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach($schedules as $schedule)
                <tr>
                    @php
                    $room = \App\Models\Room::where('idroom',$schedule->idroom)->first();
                    $user = \App\Models\User::where('id',$schedule->id_user)->first();
                    $date = date('d/m/Y', strtotime($schedule->dateSchedule));
                    @endphp
                    <td>{{$schedule->idSchedule}}</td>
                    <td>{{$room->roomName}}</td>
                    <td>{{$schedule->objective}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$date}}  {{$schedule->timeSchedule}}</td>
                    <td>
                        <form action="/schedule/{{$schedule->idSchedule}}" method="post">
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