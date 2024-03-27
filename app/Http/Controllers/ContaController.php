<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Conta;
use App\Models\Categoria;
use App\Models\Periodicidade;
use App\Models\Situation;

class ContaController extends Controller
{
    public function index()
    {
        $contas = Conta::get();
        $categorias = Categoria::get();
        $periodicidades = Periodicidade::get();
        $situations = Situation::get();
        return view('conta.index', compact('contas', 'categorias','periodicidades','situations'));
    }
    public function create()
    {
        return view('conta.index');
    }
    public function store(Request $request)
    {
        Conta::create($request->all());
        return redirect()->route('conta.index');
    }
    public function show(Conta $conta)
    {
        return $conta;
    }
    public function edit(Conta $conta)
    {
        //
    }
    public function update(Request $request, Conta $contum)
    {
        $contum->update($request->all());
        return redirect()->route('conta.index');
    }
    public function destroy(Conta $contum)
    {
        $contum->delete();
        return redirect()->route('conta.index');
    }
}