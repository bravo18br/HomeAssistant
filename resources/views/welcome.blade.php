<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" style="width:98vw;">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="icon" type="image/png" href="{{ asset('/storage/images/chris_klein_logo.png') }}">
    <link href="{{ asset('/storage/css/style.css') }}" rel="stylesheet" type="text/css">
    <title>Família Klein Home</title>
</head>

<body class="antialiased container m-1" style="width:100vw;">
    <img class="card" style="max-width: 96vw; opacity: 0.6; position: absolute; z-index: 0; top: 0; left: 0; right: 0; bottom: 0; margin: auto;" src="{{ asset ('/storage/images/background.jp') }}" />
    <div id="menu_principal">
        <div class="d-flex">
            <div id="card_localizacao_carro" class="card card_efeito text-center p-1 m-1" style="width:21rem;" data-bs-toggle="modal" data-bs-target="#Modal_card_localizacao_carro">
                <img class="card m-1" style="opacity: 0.9; width:20rem; height:16rem;" src="{{ asset('/storage/images/sentra.jpg') }}" alt="Sentra Image" />
                <div class="btn btn-outline-primary text-center p-1 m-1 botao" style="width:20rem;">Localização Carro</div>
            </div>
            <div id="card_localizacao_celular" class="card card_efeito text-center p-1 m-1" style="width:21rem;" data-bs-toggle="modal" data-bs-target="#Modal_card_localizacao_celular">
                <img class="card m-1" style="opacity: 0.9; width:20rem; height:16rem;" src="{{ asset('/storage/images/celular.jpg') }}" />
                <div class="btn btn-outline-primary text-center p-1 m-1 botao" style="width:20rem;">Localização Celular</div>
            </div>
        </div>
        <div class="d-flex">
            <div id="card_gerenciador_contas" class="card card_efeito text-center p-1 m-1" style="width:21rem;">
                <a href="{{ route('conta.index') }}" class="btn btn-outline-primary text-center p-1 m-1 botao" style="width:20rem;">
                    <img class="card m-1" style="opacity: 0.9; width:19rem;height:16rem;" src="{{ asset('/storage/images/contas.jpg') }}" />Gerenciador Contas</a>
            </div>
            <div id="card_documentos" class="card card_efeito text-center p-1 m-1" style="width:21rem;" data-bs-toggle="modal" data-bs-target="#Modal_card_documentos">
                <img class="card m-1" style="opacity: 0.9; width:20rem; height:16rem;" src="{{ asset('/storage/images/documentos.jpg') }}" />
                <div class="btn btn-outline-primary text-center p-1 m-1 botao" style="width:20rem;">Documentos</div>
            </div>
        </div>
        <div class="d-flex">
            <div id="card_concursos" class="card card_efeito text-center p-1 m-1" style="width:21rem;" data-bs-toggle="modal" data-bs-target="#Modal_card_concursos">
                <img class="card m-1" style="opacity: 0.9; width:20rem; height:16rem;" src="{{ asset ('/storage/images/concursos.jpg') }}" />
                <div class="btn btn-outline-primary text-center p-1 m-1 botao" style="width:20rem;">Gerenciador Concursos</div>
            </div>
            <div id="card_cameras" class="card card_efeito text-center p-1 m-1" style="width:21rem;" data-bs-toggle="modal" data-bs-target="#Modal_card_cameras">
                <img class="card m-1" style="opacity: 0.9; width:20rem; height:16rem;" src="{{ asset ('/storage/images/cameras.jpg') }}" />
                <div class="btn btn-outline-primary text-center p-1 m-1 botao" style="width:20rem;">Câmeras de Segurança</div>
            </div>
        </div>
    </div>

    <footer>
        <p style="text-align: center;">Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>

</html>