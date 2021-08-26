<?php

namespace App\Http\Controllers;

use App\Models\Unidade;
use Illuminate\Http\Request;

class UnidadeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $unities = Unidade::all();
        return view('adm.unity.index',compact('unities'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $unidade = new Unidade();
        return view('adm.unity.create', compact('unidade'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Unidade::create([
            'nome' => $request->nome,
            'bairro' => $request->bairro,
            'cidade' => $request->cidade,
            'created_at' => time(),
            'updated_at' => time(),
        ]);
        return redirect('unity');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Unidade  $unidade
     * @return \Illuminate\Http\Response
     */
    public function show(Unidade $unidade)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Unidade  $unidade
     * @return \Illuminate\Http\Response
     */
    public function edit($unidade)
    {
        $unidade = Unidade::find($unidade);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Unidade  $unidade
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$unidade)
    {
        $unidade = Unidade::find($unidade);
        $unidade->update([
            'nome' => $request->nome,
            'bairro' => $request->bairro,
            'cidade' => $request->cidade,
            'created_at' => time(),
            'updated_at' => time(),
        ]);
        return redirect('unity');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Unidade  $unidade
     * @return \Illuminate\Http\Response
     */
    public function destroy($unidade)
    {
        $unidade = Unidade::find($unidade);
        $unidade->delete();
        return redirect('unity');
    }
}
