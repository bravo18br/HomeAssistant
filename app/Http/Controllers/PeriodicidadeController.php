<?php

namespace App\Http\Controllers;

use App\Models\Periodicidade;
use Illuminate\Http\Request;

class PeriodicidadeController extends Controller
{
    public function index()
    {
        // $categorias = Categoria::get();
        // return redirect()->route('conta.index',$categorias);
    }
    public function create()
    {
        return view('conta.index');
    }
    public function store(Request $request)
    {
        Periodicidade::create($request->all());
        return redirect()->route('conta.index');
    }
    public function show(Periodicidade $periodicidade)
    {
        return $periodicidade;
    }
    public function edit(Periodicidade $periodicidade)
    {
        //
    }
    public function update(Request $request, Periodicidade $periodicidade)
    {
        $periodicidade->update($request->all());
        return redirect()->route('conta.index');
    }
    public function destroy(Periodicidade $periodicidade)
    {
        $periodicidade->delete();
        return redirect()->route('conta.index');
    }
}