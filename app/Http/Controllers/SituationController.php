<?php

namespace App\Http\Controllers;

use App\Models\Situation;
use Illuminate\Http\Request;

class SituationController extends Controller
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
        Situation::create($request->all());
        return redirect()->route('conta.index');
    }
    public function show(Situation $situation)
    {
        return $situation;
    }
    public function edit(Situation $situation)
    {
        //
    }
    public function update(Request $request, Situation $situation)
    {
        $situation->update($request->all());
        return redirect()->route('conta.index');
    }
    public function destroy(Situation $situation)
    {
        $situation->delete();
        return redirect()->route('conta.index');
    }
}