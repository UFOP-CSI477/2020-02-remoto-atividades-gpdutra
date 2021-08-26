<?php

namespace App\Http\Controllers;

use App\Models\Vacina;
use Illuminate\Http\Request;

class VacinaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vaccines = Vacina::all();
        return view('adm.vaccine.index',compact('vaccines'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $vacina = new Vacina();
        return view('adm.vaccine.create', compact('vacina')); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Vacina::create([
            'nome' => $request->nome,
            'fabricante' => $request->fabricante,
            'doses' => $request->doses,
            'created_at' => time(),
            'updated_at' => time(),
        ]);
        return redirect('vaccine');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Vacina  $vacina
     * @return \Illuminate\Http\Response
     */
    public function show(Vacina $vacina)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Vacina  $vacina
     * @return \Illuminate\Http\Response
     */
    public function edit($vacina)
    {
        $vacina = Vacina::find($vacina);
        return view('adm.vaccine.create', compact('vacina')); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Vacina  $vacina
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$vacina)
    {
        $vacina = Vacina::find($vacina);
        $vacina->update([
            'nome' => $request->nome,
            'fabricante' => $request->fabricante,
            'doses' => $request->doses,
            'created_at' => time(),
            'updated_at' => time(),
        ]);
        return redirect('vaccine');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Vacina  $vacina
     * @return \Illuminate\Http\Response
     */
    public function destroy($vacina)
    {
        $vacina = Vacina::find($vacina);
        $vacina->delete();
        return redirect('vaccine');
    }
}
