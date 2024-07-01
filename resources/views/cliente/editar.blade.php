<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Cliente</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    @vite(['resources/css/app.css', 'resources/js/app.js'])

<body class="bg-body-tertiary">
    <svg xmlns="http://www.w3.org/2000/svg" class="d-none">
        <symbol id="check2" viewBox="0 0 16 16">
            <path
                d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z" />
        </symbol>
        <symbol id="circle-half" viewBox="0 0 16 16">
            <path d="M8 15A7 7 0 1 0 8 1v14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z" />
        </symbol>
        <symbol id="moon-stars-fill" viewBox="0 0 16 16">
            <path
                d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278z" />
            <path
                d="M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.734 1.734 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.734 1.734 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.734 1.734 0 0 0 1.097-1.097l.387-1.162zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L13.863.1z" />
        </symbol>
        <symbol id="sun-fill" viewBox="0 0 16 16">
            <path
                d="M8 12a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z" />
        </symbol>
    </svg>



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

                    <form class="needs-validation" action="{{route('cliente.update', ['cliente' => $cliente->id])}}"
                        method="POST">
                        @csrf
                        @method('PUT')
                        <div class="row g-3">
                            <div class="col-sm-6">
                                <label for="nome" class="form-label">Nome</label>
                                <input type="text" class="form-control" id="nome" name="nome"
                                    value="{{old('nome', $cliente->nome)}}">
                                <div class="invalid-feedback">
                                    Nome
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <label for="nome" class="form-label">Sobrenome</label>
                                <input type="text" class="form-control" id="sobrenome" name="sobrenome"
                                    placeholder="Sobrenome " value="{{old('sobrenome', $cliente->sobrenome)}}">
                                <div class="invalid-feedback">
                                    Sobrenome
                                </div>
                            </div>

                            <div class="col-sm-6" x-data="{}">
                                <label for="cpf" class="form-label">CPF</label>
                                <input type="text" class="form-control" id="cpf" name="cpf" placeholder="000.000.000-00"
                                    x-mask="999.999.999-99" value="{{old('cpf', $cliente->cpf)}}">
                                <div class="invalid-feedback">
                                    CPF obrigatório
                                </div>

                            </div>

                            <div class="col-6">
                                <label for="email" class="form-label">E-mail</label>
                                <div class="input-group has-validation">
                                    <span class="input-group-text">@</span>
                                    <input type="email" class="form-control" id="email" name="email"
                                        placeholder="Seu E-mail" value="{{old('email', $cliente->email)}}">
                                    <div class="invalid-feedback">
                                        E-mail obrigatório
                                    </div>
                                </div>
                            </div>

                            <div class="col-6">
                                <label for="data_nascimento" class="form-label">Nascimento</label>
                                <input type="date" class="form-control" id="data_nascimento" name="data_nascimento"
                                    placeholder="Data de nascimento"
                                    value="{{old('data_nascimento', $cliente->data_nascimento)}}">
                                <div class="invalid-feedback">
                                    Data de nacimento obrigatório
                                </div>
                            </div>
                            <div class="col-6">
                                <label for="genero" class="form-label">Gênero</label>
                                <!-- <input type="text" class="form-control" id="genero" name="genero"
                                    placeholder="Gênero" > -->
                                <select name="genero" id="genero" class="form-control select-2" {{old('genero')}}>

                                    <option value="{{old('genero', $cliente->genero)}}">{{$cliente->genero}}</option>
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
                            <a class="btn btn-warning col-3" href="{{route('cliente.index')}}">Voltar</a>
                            <button class="col-sm-3 btn btn-success" type="submit">Salvar</button>

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