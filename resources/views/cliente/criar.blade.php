<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Cliente</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-body-tertiary">
    <div class="container">
        <main>
            <div class="py-5 text-center">
                <h2>Cadastro de clientes</h2>
                <p class="lead"> <a href="{{route('cliente.index')}}">Voltar para o painel</a></p>
            </div>

            @if ($errors->any())
                <div class="alert alert-danger">
                    @foreach ($errors->all() as $error)
                        {{$error}} <br>
                    @endforeach 
                </div>
            @endif

            <div class="row g-5">
                <div class="col-md-12 col-lg-12">
                    <form class="needs-validation" id="clienteForm" action="{{route('cliente.store')}}" method="POST">
                        @csrf
                        <div class="row g-3">
                            <div class="col-sm-6">
                                <label for="nome" class="form-label">Nome</label>
                                <input type="text" class="form-control" id="nome" name="nome"
                                    placeholder="Seu Primeiro Nome " value="{{old('nome')}}">
                                <div class="invalid-feedback">
                                    Nome
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <label for="sobrenome" class="form-label">Sobrenome</label>
                                <input type="text" class="form-control" id="sobrenome" name="sobrenome"
                                    placeholder="Sobrenome " value="{{old('sobrenome')}}">
                                <div class="invalid-feedback">
                                    Sobrenome
                                </div>
                            </div>

                            <div class="col-sm-6" x-data="{}">
                                <label for="cpf" class="form-label">CPF</label>
                                <input type="text" class="form-control" id="cpf" name="cpf" placeholder="000.000.000-00"
                                    x-mask="999.999.999-99" value="{{old('cpf')}}">
                                <div class="invalid-feedback">
                                    CPF obrigatório
                                </div>
                            </div>

                            <div class="col-6">
                                <label for="email" class="form-label">E-mail</label>
                                <div class="input-group has-validation">
                                    <span class="input-group-text">@</span>
                                    <input type="email" class="form-control" id="email" name="email"
                                        placeholder="Seu E-mail" value="{{old('email')}}">
                                    <div class="invalid-feedback">
                                        E-mail obrigatório
                                    </div>
                                </div>
                            </div>

                            <div class="col-6">
                                <label for="data_nascimento" class="form-label">Nascimento</label>
                                <input type="date" class="form-control" id="data_nascimento" name="data_nascimento"
                                    placeholder="Data de nascimento" value="{{old('data_nascimento')}}">
                                <div class="invalid-feedback">
                                    Data de nascimento obrigatória
                                </div>
                            </div>
                            <div class="col-6">
                                <label for="genero" class="form-label">Gênero</label>
                                <select name="genero" id="genero" class="form-control select-2">
                                    <option value="">---- Gênero ----</option>
                                    <option value="Masculino">Masculino</option>
                                    <option value="Feminino">Feminino</option>
                                    <option value="Outros">Outro</option>
                                </select>
                                <div class="invalid-feedback">
                                    Gênero obrigatório
                                </div>
                            </div>
                        </div>

                        <hr class="my-4">

                        <div class="text-center">
                            <a class="btn btn-warning col-2" href="{{route('cliente.index')}}">Voltar</a>
                            <button type="button" class="col-sm-2 btn btn-primary" onclick="limparFormulario()">Limpar Formulário</button>
                            <button class="col-sm-2 btn btn-success" type="submit">Salvar</button>
                        </div>
                    </form>
                </div>
            </div>
        </main>

        <footer class="my-5 pt-5 text-body-secondary text-center text-small">
            <p>Teste IP4Y</p>
        </footer>
    </div>
    <script src="/docs/5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <script>
        function limparFormulario() {
            document.getElementById('clienteForm').reset();
        }
    </script>
</body>

</html>
