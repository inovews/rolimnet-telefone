<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;

use App\User;
use App\Atendimento;

class AtendimentoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $atendimentos = Atendimento::latest()->paginate(10);
        return view('atendimento.index', compact('atendimentos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('atendimento.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate($request, [
            'solicitante'     => 'required|max:255',
            'nota'  => 'required|numeric|max:255'
        ]);
        Atendimento::create([
            'solicitante'     => request('solicitante'),
            'contrato' => request('contrato'),
            'relato' => request('relato'),
            'observacoes' => request('observacoes'),
            'os' => request('os'),
            'nota' => request('nota'),
            'status' => request('status'),
            'data' => request('data'),
            'user_id'   => \Auth::user()->id,
        ]);
        return redirect()->route('atendimento')->with('message', 'O Atendimento foi criado com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $atendimento = Atendimento::findOrFail($id);
        return view('atendimento.edit', compact('atendimento'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $this->validate($request, [
            'solicitante'     => 'required|max:255',
            'nota'  => 'required|numeric|max:255'
        ]);

        $atendimento = Atendimento::find($id);
        $atendimento->update([
            'solicitante' => request('solicitante'),
            'contrato' => request('contrato'),
            'relato' => request('relato'),
            'observacoes' => request('observacoes'),
            'os' => request('os'),
            'nota' => request('nota'),
            'status' => request('status'),
            'data' => request('data'),
            'user_id'   => \Auth::user()->id,
        ]);

        return redirect()->route('atendimento')->with('message', 'O Atendimento foi atualizado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $atendimento = Atendimento::findOrFail($id);
        $atendimento->delete();

        return redirect()->route('atendimento')->with('message', 'Registro removido com sucesso.');
    }
}
