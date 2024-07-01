<?php

namespace App\Http\Controllers\Api;
use App\Models\User;
use App\Models\clienteModel;
use App\Http\Controllers\Controller;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;


class UserController extends Controller
{

     /**
     * Retorna uma lista paginada de usuários.
     *
     * Este método recupera uma lista paginada de usuários do banco de dados
     * e a retorna como uma resposta JSON.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index(): JsonResponse
    {
        //Recupera os usuarios do banco de dados, ordenados pelo id em ordem decrescente, paginados
        $clientes = clienteModel::orderBy('id', 'DESC')->select('id','nome','sobrenome','email','cpf','genero',)->get();

        //Retorn aos usuarios recuperados como uma resposta json
        return response()->json([
            'status' => true,
            'users' => $clientes
        ], 200);
    }
}
