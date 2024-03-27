<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset=" utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="icon" type="image/png" href="{{ asset('/storage/images/chris_klein_logo.png') }}">
    <link href="{{ asset('/storage/css/style.css') }}" rel="stylesheet" type="text/css">
    <title>Família Klein Home</title>
</head>

<body class="antialiased m-3 p-3">
    <div class="card m-3 p-3">
        <div class="d-flex">
            <h3 class="m-1" style="width:90%;">Monitorar Contas</h3>
            <a style="width:10%;" href="{{ route('welcome') }}"><img style="width:5rem;height:3rem;" src="{{ asset('/storage/images/voltar_icone.png') }}" /></a>
        </div>
        <div class="card m-1 p-1">
            <h5 class="m-1">### EXIBIR MONITOR ###</h5>
            <h5 class="m-1">### EXIBIR MONITOR ###</h5>
            <h5 class="m-1">### EXIBIR MONITOR ###</h5>
        </div>
    </div>

    <div class="accordion card m-3 p-3" id="accordionExample">
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                    <h4 class="m-1" style="width:90%;">Gerenciar Contas</h4>
                </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <div class="card m-1 p-1">
                        <h5 class="m-1">Contas registradas</h5>
                        @forelse($contas as $conta)
                        <form action="/conta/conta/{{$conta->id}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <div class="d-flex">
                                <input id="id_input_editar_conta_{{$conta->id}}" class="m-1 p-1" style="width:100%;" type="text" placeholder="Conta" title="Conta" name="nome" value="{{ @$conta->nome }}" required>
                                <button style="width:60px;" type="submit" class="btn btn-danger m-1 p-1">Excluir</button>
                            </div>
                        </form>
                        @empty
                        <p class="m-1">Não existem contas cadastradas</p>
                        @endforelse
                    </div>
                    <div class="card m-1 p-1">
                        <h5 class="m-1">Criar nova conta</h5>
                        <form id="id_form_nova_conta" action="/conta/conta" method="POST">
                            @csrf
                            @method('POST')
                            <div class="d-flex">
                                <input id="id_input_nova_conta" style="width:25%;" class="m-1 p-1" type="text" placeholder="Nome da conta nova" title="Digite um nome para a nova conta" name="nome" required>
                                <input class="m-1 p-1" style="width:75%;" type="text" placeholder="Descrição" title="Descrição" name="descricao">
                            </div>
                            <div class="d-flex">
                                <input class="m-1 p-1" style="width:25%;" type="number" step="0.01" placeholder="Valor Original em R$" title="Valor original da conta" name="valor_original">
                                <input class="m-1 p-1" style="width:25%;" type="date" placeholder="Data Original" title="Data original de vencimento" name="data_original">
                                <input class="m-1 p-1" style="width:25%;" type="number" step="0.01" placeholder="Valor Pagamento em R$" title="Valor efetivamente pago" name="valor_pgmt">
                                <input class="m-1 p-1" style="width:25%;" type="date" placeholder="Data Pagamento" title="Data efetiva do pagamento" name="data_pgmt">
                            </div>
                            <div class="d-flex">
                                <select class="form-select m-1 p-1" style="width:33%;" title="Categoria ID" name="categoria_id" required>
                                    <option value="" selected disabled>Selecione uma categoria</option>
                                    @foreach($categorias as $categoria)
                                    <option value="{{$categoria->id}}">{{$categoria->nome}}</option>
                                    @endforeach
                                </select>
                                <select class="form-select m-1 p-1" style="width:33%;" title="Periodicidade ID" name="periodicidade_id" required>
                                    <option value="" selected disabled>Selecione uma periodicidade</option>
                                    @foreach($periodicidades as $periodicidade)
                                    <option value="{{$periodicidade->id}}">{{$periodicidade->nome}}</option>
                                    @endforeach
                                </select>
                                <select class="form-select m-1 p-1" style="width:33%;" title="Situação ID" name="situation_id" required>
                                    <option value="" selected disabled>Selecione uma situação</option>
                                    @foreach($situations as $situation)
                                    <option value="{{$situation->id}}">{{$situation->nome}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="d-flex">
                                <input type="file" style="width:75%;" class="form-control m-1 p-1" title="Anexar PDF ou Imagem" name="pdf" accept=".pdf, image/*">
                                <input class="btn btn-success m-1 p-1" style="width:25%;" type="submit" value="Criar Conta" title="Clique para salvar conta">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    <h4 class="m-1" style="width:90%;">Gerenciar Categorias de Contas</h4>
                </button>
            </h2>
            <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <div class="card m-1 p-1">
                        <h5 class="m-1">Categorias registradas</h5>
                        @forelse($categorias as $categoria)
                        <form action="/conta/categoria/{{$categoria->id}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <div class="d-flex">
                                <input id="id_input_editar_categoria_{{$categoria->id}}" class="m-1 p-1" style="width:100%;" type="text" placeholder="Categoria" title="Categoria" name="nome" value="{{ @$categoria->nome }}" required>
                                <button style="width:60px;" type="submit" class="btn btn-danger m-1 p-1">Excluir</button>
                            </div>
                        </form>
                        @empty
                        <p class="m-1">Não existem categorias cadastradas</p>
                        @endforelse
                    </div>

                    <div class="card m-1 p-1">
                        <h5 class="m-1">Registrar nova categoria</h5>
                        <form id="id_form_nova_categoria" action="/conta/categoria" method="POST">
                            @csrf
                            @method('POST')
                            <div class="d-flex">
                                <input id="id_input_nova_categoria" class="m-1 p-1" style="width:100%;" type="text" placeholder="Nova categoria + enter" title="Digite uma categoria nova e enter" name="nome" required>
                                <button style="width:60px;" type="submit" class="btn btn-primary m-1 p-1">Criar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    <h4 class="m-1" style="width:90%;">Gerenciar Periodicidades de Contas</h4>
                </button>
            </h2>
            <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <div class="card m-1 p-1">
                        <h5 class="m-1">Periodicidades registradas</h5>
                        @forelse($periodicidades as $periodicidade)
                        <form action="/conta/periodicidade/{{$periodicidade->id}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <div class="d-flex">
                                <input id="id_input_editar_periodicidade_{{$periodicidade->id}}" class="m-1 p-1" style="width:100%;" type="text" placeholder="Periodicidade" title="Periodicidade" name="nome" value="{{ @$periodicidade->nome }}" required>
                                <button style="width:60px;" type="submit" class="btn btn-danger m-1 p-1">Excluir</button>
                            </div>
                        </form>
                        @empty
                        <p class="m-1">Não existem periodicidades cadastradas</p>
                        @endforelse
                    </div>

                    <div class="card m-1 p-1">
                        <h5 class="m-1">Registrar nova periodicidade</h5>
                        <form id="id_form_nova_periodicidade" action="/conta/periodicidade" method="POST">
                            @csrf
                            @method('POST')
                            <div class="d-flex">
                                <input id="id_input_nova_periodicidade" class="m-1 p-1" style="width:100%;" type="text" placeholder="Nova periodicidade + enter" title="Digite uma periodicidade nova e enter" name="nome" required>
                                <button style="width:60px;" type="submit" class="btn btn-primary m-1 p-1">Criar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                    <h4 class="m-1" style="width:90%;">Gerenciar Situações de Contas</h4>
                </button>
            </h2>
            <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <div class="card m-1 p-1">
                        <h5 class="m-1">Situações registradas</h5>
                        @forelse($situations as $situation)
                        <form action="/conta/situation/{{$situation->id}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <div class="d-flex">
                                <input id="id_input_editar_situation_{{$situation->id}}" class="m-1 p-1" style="width:100%;" type="text" placeholder="Situações" title="Situações" name="nome" value="{{ @$situation->nome }}" required>
                                <button style="width:60px;" type="submit" class="btn btn-danger m-1 p-1">Excluir</button>
                            </div>
                        </form>
                        @empty
                        <p class="m-1">Não existem situações cadastradas</p>
                        @endforelse
                    </div>

                    <div class="card m-1 p-1">
                        <h5 class="m-1">Registrar nova situação</h5>
                        <form id="id_form_nova_situation" action="/conta/situation" method="POST">
                            @csrf
                            @method('POST')
                            <div class="d-flex">
                                <input id="id_input_nova_situation" class="m-1 p-1" style="width:100%;" type="text" placeholder="Nova situação + enter" title="Digite uma situação nova e enter" name="nome" required>
                                <button style="width:60px;" type="submit" class="btn btn-primary m-1 p-1">Criar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <footer style="text-align: center;">
        <p style="display: inline-block; color: black; box-shadow: 0px 0px 30px rgba(0, 0, 0, 0.8); width: 30%; border-radius: 5px;">Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    <script src="{{ asset('/storage/js/app.js') }}"></script>
</body>

</html>