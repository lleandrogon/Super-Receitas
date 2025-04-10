<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Receita;
use Illuminate\Support\Facades\Auth;

class ReceitaController extends Controller
{
    public function index() {
        return view("criar");
    }

    public function criar(Request $request) {
        $regras = [
            'titulo' => 'required',
            'ingredientes' => 'required',
            'preparo' => 'required',
            'tempo' => 'required|integer|min:1',
            'imagem' => 'required|image|mimes:jpg,jpeg,png,webp|max:2048'
        ];

        $feedback = [
            'titulo.required' => 'O nome da receita é obrigatório!',
            'ingredientes.required' => 'Ingredientes são obrigatórios!',
            'preparo.required' => 'O preparo é obrigatório!',
            'tempo.*' => 'O tempo fornecido é inválido!',
            'imagem.*' => 'Imagem deve ter extensão (jpg, jpeg, png, webp) com no máximo 2MB.'
        ];

        $request->validate($regras, $feedback);

        $caminhoImagem = $request->file('imagem')->store('receitas', 'public');

        Receita::create([
            'titulo' => $request->titulo,
            'ingredientes' => $request->ingredientes,
            'preparo' => $request->preparo,
            'tempo' => $request->tempo,
            'imagem' => $caminhoImagem,
            'user_id' => Auth::id()
        ]);

        return redirect()->route('principal');
    }

    public function show($id) {
        $receita = Receita::findOrFail($id);

        return view('mostrar', compact("receita"));
    }

    public function minhasReceitas() {
        $usuario = Auth::user();
        $receitas = $usuario->receitas;

        return view("minhasReceitas", compact("receitas"));
    }

    public function destroy($id) {
        $receita = Receita::findOrFail($id);
        $receita->delete();

        return redirect()->back();
    }

    public function editar($id) {
        $receita = Receita::findOrFail($id);

        return view("editar", compact("receita"));
    }

    public function update(Request $request, $id) {
        $regras = [
            'titulo' => 'required',
            'ingredientes' => 'required',
            'preparo' => 'required',
            'tempo' => 'required|integer|min:1',
            'imagem' => 'required|image|mimes:jpg,jpeg,png,webp|max:2048'
        ];

        $feedback = [
            'titulo.required' => 'O nome da receita é obrigatório!',
            'ingredientes.required' => 'Ingredientes são obrigatórios!',
            'preparo.required' => 'O preparo é obrigatório!',
            'tempo.*' => 'O tempo fornecido é inválido!',
            'imagem.*' => 'Imagem deve ter extensão (jpg, jpeg, png, webp) com no máximo 2MB.'
        ];

        $request->validate($regras, $feedback);

        $caminhoImagem = $request->file('imagem')->store('receitas', 'public');

        Receita::where('id', $id)->update([
            'titulo' => $request->titulo,
            'ingredientes' => $request->ingredientes,
            'preparo' => $request->preparo,
            'tempo' => $request->tempo,
            'imagem' => $caminhoImagem
        ]);

        return redirect()->route('minhas.receitas');
    }
}
