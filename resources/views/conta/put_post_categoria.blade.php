<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" style="width:98vw;">

<head>
    <title>Categorias de Contas</title>
</head>

<body class="antialiased container m-1" style="width:100vw;">

<form action="{{ isset($categoria) ? '/conta/categoria/' . $categoria->id : '/conta/categoria/' }}" method="POST">
        @csrf
        @isset ($categoria)
        @method('PUT')
        @endisset
        <input class="m-1 p-1" style="width:15rem;" type="text" id="nome_nome" placeholder="Nome" title="Nome" name="nome" value="{{ @$categoria->nome }}" required>
        <input class="btn btn-danger" type="submit" value="enviar">
    </form>
</body>