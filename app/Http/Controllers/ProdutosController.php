<?php
namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;

class ProdutosController extends Controller
{
    public function index(Request $request){
        return Produto::all();
    }

    public function store(Request $request){
        return $request;
        return Produto::create([
            'Descricao' => $request->descricao,
            'valor' => $request->valor,
            'marca' => $request->marca,
            'tipo' => $request->tipo,
            'quantidade' => $request->quantidade,
        ]);
    }

    public function show(Request $request, Produto $produto){
        return $produto;
    } 
    public function delete(Produto $produto){
        $produto->delete();
    }
}

