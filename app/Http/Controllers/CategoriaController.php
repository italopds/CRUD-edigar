<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    private $categorias = [
        1 => ['id' => 1, 'nome' => 'espotivo'],
        2 => ['id' => 2, 'nome' => 'sedan'],
        3 => ['id' => 3, 'nome' => 'SUV'],
    ];

    public function index()
    {
        return response()->json([
            'produtos' => $this->categorias
        ]);
    }
    
    public function create()
    {
        return response()->json(['mensagem' => 'Formulário para criar uma categoria']);
    }

   
    public function store(Request $request, string $id)
    {
        return response()->json(['message' => 'Categoria criada com sucesso']);
    }

    public function show(string $id)
    {
        $categoria = collect($this->categorias)->firstWhere('id', $id);

        if ($categoria) {
            return response()->json($categoria);
        }

        return response()->json(['message' => 'Produto não encontrado'], 404);
    }

    
    public function edit(string $id)
    {
        return response()->json(['message' => 'categoria editada com sucesso']);
    }

    
    public function update(Request $request, string $id)
    {
        return response()->json(['message' => 'categoria atualizada com sucesso']);
    }

    
    public function destroy(string $id)
    {
        return response()->json(['message' => 'categoria excluída com sucesso']);
    }
}
