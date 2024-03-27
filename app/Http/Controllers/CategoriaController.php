<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
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
        Categoria::create($request->all());
        return redirect()->route('conta.index');
    }

    public function show(Categoria $categoria)
    {
        return $categoria;
    }

    public function edit(Categoria $categoria)
    {
        //
    }

    public function update(Request $request, Categoria $categorium)
    {
        $categorium->update($request->all());
        return redirect()->route('conta.index');
    }

    public function destroy(Categoria $categorium)
    {
        $categorium->delete();
        return redirect()->route('conta.index');
    }
}