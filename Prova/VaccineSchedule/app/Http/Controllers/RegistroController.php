<?php

namespace App\Http\Controllers;

use App\Models\Registro;
use App\Models\Vacina;
use Illuminate\Http\Request;

class RegistroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $records = Registro::all();
        return view('adm.records.index',compact('records'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $registro = new Registro();
        return view('adm.records.create', compact('registro'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        $vacina = Vacina::find($request->vacina_id);
        $dose = $request->dose;
        if($vacina->doses == 1){
            $dose = 0;
        }

        Registro::create([
            'pessoa_id' => $request->pessoa_id,
            'unidade_id' => $request->unidade_id,
            'vacina_id' => $request->vacina_id,
            'dose' => $dose,
            'data' => $request->data,
            'created_at' => time(),
            'updated_at' => time(),
        ]);
        return redirect('records');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Registro  $registro
     * @return \Illuminate\Http\Response
     */
    public function show(Registro $registro)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Registro  $registro
     * @return \Illuminate\Http\Response
     */
    public function edit($registro)
    {
        $registro = Registro::find($registro);
        return view('adm.records.edit',compact('registro'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Registro  $registro
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$registro)
    {
        $registro = Registro::find($registro);
        $registro->update([
            'pessoa_id' => $request->pessoa_id,
            'unidade_id' => $request->unidade_id,
            'vacina_id' => $request->vacina_id,
            'dose' => $request->dose,
            'data' => $request->data,
            'created_at' => time(),
            'updated_at' => time(),
        ]);
        return redirect('records');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Registro  $registro
     * @return \Illuminate\Http\Response
     */
    public function destroy($registro)
    {
        $registro = Registro::find($registro);
        $registro->delete();
        return redirect('records');
    }
}
