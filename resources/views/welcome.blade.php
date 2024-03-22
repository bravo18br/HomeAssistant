<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" style="width:98vw;">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="icon" type="image/png" href="{{ asset('/storage/images/chris_klein_logo.png') }}">
    <title>Família Klein Home</title>
</head>

<body class="antialiased container m-1" style="width:100vw;">
    <img class="card" style="max-width: 96vw; opacity: 0.6; position: absolute; z-index: 0; top: 0; left: 0; right: 0; bottom: 0; margin: auto;" src="{{ asset ('/images/background.jpg') }}" />
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
            <div id="card_gerenciador_contas" class="card card_efeito text-center p-1 m-1" style="width:21rem;" data-bs-toggle="modal" data-bs-target="#Modal_card_gerenciador_contas">
                <img class="card m-1" style="opacity: 0.9; width:20rem; height:16rem;" src="{{ asset('/storage/images/contas.jpg') }}" />
                <div class="btn btn-outline-primary text-center p-1 m-1 botao" style="width:20rem;">Gerenciador Contas</div>
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

    <div class="modal fade" id="Modal_card_gerenciador_contas" tabindex="-1" aria-labelledby="Modal_card_gerenciador_contas" aria-hidden="true">
        <div class="modal-dialog" style="max-width: 85%;">
            <div class="modal-content d-block" id="id_modal_content_gerenciador_contas">
                <div class="modal-header">
                    <h4 class="modal-title p-1 m-1">Gerenciador Contas</h4>
                </div>
                <div class="modal-body p-1 m-1" id="modal_body">
                    <div id="menu_gerenciar_contas">
                        <div class="btn btn-primary m-1 p-1 d-block fs-4" id="botao_gerenciar_contas">Gerenciar Contas</div>
                        <div class="btn btn-primary m-1 p-1 d-block fs-5" id="botao_gerenciar_tipos_contas">Gerenciar Tipos de Contas</div>
                        <div class="btn btn-primary m-1 p-1 d-block fs-5" id="botao_gerenciar_periodicidade_contas">Gerenciar Periodicidade de Contas</div>
                        <div class="btn btn-primary m-1 p-1 d-block fs-5" id="botao_gerenciar_status_contas">Gerenciar Status de Contas</div>
                    </div>
                    <div class="btn btn-outline-danger m-1 p-1 botao_sair_modal" style="width:5rem;" id="botao_cancelar">Sair</div>
                </div>
            </div>
            <div class="modal-content d-none" id="id_modal_content_gerenciar_contas">
                <div class="modal-header">
                    <h4 class="modal-title p-1 m-1">Gerenciar Contas</h4>
                </div>
                <div class="modal-body p-1 m-1" id="modal_body">
                    <div id="modal_gerenciar_contas">
                        <h4 class="modal-title p-1 m-1">ijgagigibgjib</h4>
                        <div class="btn btn-outline-primary m-1 p-1 botao_voltar_gerenciador_contas" style="width:5rem;">Voltar</div>
                        <div class="btn btn-outline-danger m-1 p-1 botao_sair_modal" style="width:5rem;" id="botao_cancelar">Sair</div>
                    </div>
                </div>
            </div>
            <div class="modal-content d-none" id="id_modal_content_gerenciar_tipos_contas">
                <div class="modal-header">
                    <h4 class="modal-title p-1 m-1">Gerenciar Tipos de Contas</h4>
                </div>
                <div class="modal-body p-1 m-1" id="modal_body">
                    <div id="modal_gerenciar_tipos_contas">
                        <div class="card m-1 p-1">
                            <h4>Registros encontrados</h4>
                            <div id="div_tabela_gerenciar_tipos_contas"></div>
                        </div>
                        <div class="card m-1 p-1">
                            <h4>Inserir novo</h4>
                            <form action="/tipos-contas" method="POST" id="form_inserir_tipo_conta">
                                @csrf
                                <input class="m-1 p-1" style="width:15rem;" type="text" id="nome_tipo_conta_options" placeholder="Insira o novo tipo de conta" title="Insira o novo tipo de conta" name="nome_tipo_conta_options" required>
                            </form>
                        </div>
                        <div class="btn btn-outline-primary m-1 p-1 botao_voltar_gerenciador_contas" style="width:5rem;">Voltar</div>
                        <div class="btn btn-outline-danger m-1 p-1 botao_sair_modal" style="width:5rem;" id="botao_cancelar">Sair</div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="modal fade" id="Modal_card_documentos" tabindex="-1" aria-labelledby="Modal_card_documentos" aria-hidden="true">
        <div class="modal-dialog" style="max-width: 85%;">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title p-1 m-1">Documentos</h4>
                </div>
                <div class="modal-body p-1 m-1">

                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="Modal_card_concursos" tabindex="-1" aria-labelledby="Modal_card_concursos" aria-hidden="true">
        <div class="modal-dialog" style="max-width: 85%;">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title p-1 m-1">Gerenciador Concursos</h4>
                </div>
                <div class="modal-body p-1 m-1">

                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="Modal_card_cameras" tabindex="-1" aria-labelledby="Modal_card_cameras" aria-hidden="true">
        <div class="modal-dialog" style="max-width: 85%;">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title p-1 m-1">Câmeras de Segurança</h4>
                </div>
                <div class="modal-body p-1 m-1">

                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="Modal_card_localizacao_celular" tabindex="-1" aria-labelledby="Modal_card_localizacao_celular" aria-hidden="true">
        <div class="modal-dialog" style="max-width: 85%;">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title p-1 m-1">Localização Celular</h4>
                </div>
                <div class="modal-body p-1 m-1">

                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="Modal_card_localizacao_carro" tabindex="-1" aria-labelledby="Modal_card_localizacao_carro" aria-hidden="true">
        <div class="modal-dialog" style="max-width: 85%;">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title p-1 m-1">Localização Carro</h4>
                </div>
                <div class="modal-body p-1 m-1">

                </div>
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