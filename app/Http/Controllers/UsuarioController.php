<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    private $Usuarios = [
        1 => ['id' => 1, 'nome' => 'Lucas Silva'],
        2 => ['id' => 2, 'nome' => 'João da Silva'],
        3 => ['id' => 3, 'nome' => 'Maria da Oliveira'],
    ];
    
    public function index()
    {
        return response()->json([
            'produtos' => $this->Usuarios
        ]);
    }
    
    public function create()
    {
        return response()->json(['mensagem' => 'Formulário para criar uma usuario']);
    }

   
    public function store(Request $request, string $id)
    {
        return response()->json(['message' => 'Usuario criado com sucesso']);
    }

    public function show(string $id)
    {
        $Usuario = collect($this->Usuarios)->firstWhere('id', $id);

        if ($Usuario) {
            return response()->json($Usuario);
        }

        return response()->json(['message' => 'Usuario não encontrado'], 404);
    }

    
    public function edit(string $id)
    {
        return response()->json(['message' => 'Usuario editado com sucesso']);
    }

    
    public function update(Request $request, string $id)
    {
        return response()->json(['message' => 'Usuario atualizado com sucesso']);
    }

    
    public function destroy(string $id)
    {
        return response()->json(['message' => 'Usuario excluído com sucesso']);
    }
}
