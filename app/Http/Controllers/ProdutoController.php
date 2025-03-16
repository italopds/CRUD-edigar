<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    private $produtos = [
        1 => ['id' => 1, 'nome' => 'BMW X6'],
        2 => ['id' => 2, 'nome' => 'corolla'],
        3 => ['id' => 3, 'nome' => 'Fiat Uno'],
    ];
    
    public function index()
    {
        return response()->json([
            'produtos' => $this->produtos
        ]);
    }
    
    public function create()
    {
        return response()->json(['mensagem' => 'Formulário para criar uma produto']);
    }

   
    public function store(Request $request, string $id)
    {
        return response()->json(['message' => 'Protudo criado com sucesso']);
    }

    public function show(string $id)
    {
        $produto = collect($this->produtos)->firstWhere('id', $id);

        if ($produto) {
            return response()->json($produto);
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
