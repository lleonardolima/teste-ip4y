<?php

namespace App\Http\Controllers;

use App\Http\Requests\ClienteRequest;
use App\Models\clienteModel;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function index()
    {
        $cliente = clienteModel::orderByDesc('id')->get();
        return view('cliente/index', ['cliente' => $cliente]);

    }
    public function criar()
    {
        return view('cliente/criar');
    }
    public function store(ClienteRequest $request)
    {
        //Valida os campos
        $request->validated();

        //salva no banco de dados
        clienteModel::create($request->all());
        return redirect()->route('cliente.index')->with('sucesso', 'Cliente cadastrado com sucesso');
    }
    public function editar(clienteModel $cliente)
    {
        return view('cliente/editar', ['cliente' => $cliente]);
    }
    public function update(ClienteRequest $request, clienteModel $cliente)
    {
        $request->validated();
        $cliente->update([
            'nome' => $request->nome,
            'sobrenome' => $request->sobrenome,
            'cpf' => $request->cpf,
            'email' => $request->email,
            'data_nascimento' => $request->data_nascimento,
            'genero' => $request->genero
        ]);
        return redirect()->route('cliente.index')->with('update', 'Cliente alterado com sucesso');


    }
    public function destroy(clienteModel $cliente)
    {
        $cliente->delete();

        //redirecionamento 
        return redirect()->route('cliente.index')->with('delete', 'Cliente excluído com sucesso!');

    }

}

