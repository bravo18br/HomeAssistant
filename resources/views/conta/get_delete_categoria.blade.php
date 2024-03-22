<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" style="width:98vw;">

<head>
    <title>Categorias Cadastradas</title>
</head>

<body class="antialiased container m-1" style="width:100vw;">
    @forelse($categorias as $categoria)
    <form action="/conta/categoria/{{$categoria->id}}" method="POST">
        @csrf
        @method('DELETE')
        <p>{{$categoria->nome}}</p>
        <button type="submit">Remover</button>
    </form>
    @empty
    <p>Não existem categorias cadastradas</p>
    @endforelse
</body>