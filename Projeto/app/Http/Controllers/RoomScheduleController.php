<?php

namespace App\Http\Controllers;

use App\Models\RoomSchedule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Throwable;

class RoomScheduleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $schedules = RoomSchedule::all();
        return view('crud.schedule.index',compact('schedules'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $room = new RoomSchedule();
        return view('crud.schedule.create',compact('room'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        RoomSchedule::create([
            'idroom' => $request->idroom,
            'objective' => $request->objective,
            'dateSchedule' => $request->dateSchedule,
            'timeSchedule' => $request->timeSchedule,
            'id_user' => Auth::user()->id,
        ]);
        return redirect('room')->with('success','Sala cadastrada com sucesso');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\RoomSchedule  $roomSchedule
     * @return \Illuminate\Http\Response
     */
    public function show(RoomSchedule $roomSchedule)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\RoomSchedule  $roomSchedule
     * @return \Illuminate\Http\Response
     */
    public function edit(RoomSchedule $roomSchedule)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\RoomSchedule  $roomSchedule
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, RoomSchedule $roomSchedule)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\RoomSchedule  $roomSchedule
     * @return \Illuminate\Http\Response
     */
    public function destroy($roomSchedule)
    {
        $roomSchedule = RoomSchedule::find($roomSchedule);
        try {
            $roomSchedule->delete();
            return redirect('schedule')->with('success', 'Agenda excluída com sucesso!');
        } catch (Throwable $e) {
            report($e);
    
            return redirect('schedule')->with('danger', 'Agenda não excluída com sucesso!');
        }
    }
}
