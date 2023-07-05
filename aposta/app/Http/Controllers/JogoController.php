<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jogo;

class JogoController extends Controller
{
    public function create()
    {
        return view('criar_jogo');
    }

    public function store(Request $request)
    {
        // Validar os dados do formulário
        $validatedData = $request->validate([
            'nome' => 'required',
            'descricao' => 'required',
        ]);
    
        // Criar o jogo no banco de dados
        $jogo = new Jogo();
        $jogo->nome = $validatedData['nome'];
        $jogo->descricao = $validatedData['descricao'];
        // Adicione outras propriedades do jogo, se houver
    
        // Salvar o jogo
        $jogo->save();
    
        // Redireciona para a página de visualização do jogo criado
        return redirect()->route('jogo.show', $jogo->id);
    }    

    public function show($id)
    {
        // Buscar o jogo com o ID fornecido no banco de dados
        $jogo = Jogo::find($id);
    
        // Verificar se o jogo foi encontrado
        if (!$jogo) {
            // Caso o jogo não seja encontrado, redireciona para uma página de erro.
            return redirect()->back()->with('error', 'Jogo não encontrado');
        }
    
        // Retorna a view 'detalhes_jogo' passando o jogo como parâmetro
        return view('detalhes_jogo', compact('jogo'));
    } 
}
