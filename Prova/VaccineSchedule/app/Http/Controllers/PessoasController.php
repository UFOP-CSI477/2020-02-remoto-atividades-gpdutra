<?php

namespace App\Http\Controllers;

use App\Models\Pessoas;
use Illuminate\Http\Request;

class PessoasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $peoples = Pessoas::all();
        return view('adm.peoples.index',compact('peoples'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pessoas = new Pessoas();
        return view('adm.peoples.create', compact('pessoas')); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Pessoas::create([
            'nome' => $request->nome,
            'bairro' => $request->bairro,
            'cidade' => $request->cidade,
            'data_nascimento' => $request->data_nascimento,
            'created_at' => time(),
            'updated_at' => time(),
        ]);
        return redirect('people');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pessoas  $pessoas
     * @return \Illuminate\Http\Response
     */
    public function show(Pessoas $pessoas)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pessoas  $pessoas
     * @return \Illuminate\Http\Response
     */
    public function edit($pessoas)
    {
        $pessoas = Pessoas::find($pessoas);
        return view('adm.peoples.edit', compact('pessoas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pessoas  $pessoas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$pessoas)
    {
        $pessoas = Pessoas::find($pessoas);
        $pessoas->update([
            'nome' => $request->nome,
            'bairro' => $request->bairro,
            'cidade' => $request->cidade,
            'data_nascimento' => $request->data_nascimento,
            'created_at' => time(),
            'updated_at' => time(),
        ]);
        return redirect('people');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pessoas  $pessoas
     * @return \Illuminate\Http\Response
     */
    public function destroy($pessoas)
    {
        $pessoas = Pessoas::find($pessoas);
        $pessoas->delete();
        return redirect('people');
    }
}
