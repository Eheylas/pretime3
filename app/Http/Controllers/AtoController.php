<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ato;

class AtoController extends Controller {

    public function listar() {
        return view('listar2', ['atos' => Ato::all()]);
    }

    public function criar() {
        return view('criar2');
    }

    public function editar($id) {
        return view('editar2', ['ato' => Ato::findOrFail($id)]);
    }

    public function remover($id) {
        $ato = Ato::find($id);
        $ato->delete();
        return redirect('ato/listar');
    }

    public function salvar(Request $request) {
        $ato = new Ato;

        if ($request->has('id')) {
            $ato = Ato::find($request->id);
        }

        $ato->numero_ato = $request->numero_ato;
        $ato->periodo_letivo = $request->periodo_letivo;
        $ato->situacao = $request->situacao;
        $ato->data = $request->data;
        $ato->titulo_ato = $request->titulo_ato;
        $ato->descricao = $request->descricao;
        $ato->cancelar_motivo = $request->cancelar_motivo;
        $ato->save();
        return redirect('ato/listar');
    }

    public function ver($id){
        return view('ver', ['ato' => Ato::findOrFail($id)]);
    }
    
    public function cancelar($id){
        return view('cancelar2', ['ato' => Ato::findOrFail($id)]);
    }
    
    public function publicar($id){
        return view('publicar',['ato' => Ato::find($id)]);
    }

}
