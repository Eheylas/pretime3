<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ata;

class AtaController extends Controller {

    public function listar() {
        return view('listar', ['atas' => Ata::all()]);
    }

    public function criar() {
        return view('criar');
    }

    public function editar($id) {
        return view('editar', ['ata' => Ata::findOrFail($id)]);
    }

    public function remover($id) {
        $ata = Ata::find($id);
        $ata->delete();
        return redirect('ata/listar');
    }

    public function salvar(Request $request) {
        $ata = new Ata;

        if ($request->has('id')) {
            $ata = Ata::find($request->id);
        }

        $ata->numero_ata = $request->numero_ata;
        $ata->periodo_letivo = $request->periodo_letivo;
        $ata->situacao = $request->situacao;
        $ata->data = $request->data;
        $ata->titulo_ata = $request->titulo_ata;
        $ata->pontos_discutidos = $request->pontos_discutidos;
        $ata->cancelar_motivo = $request->cancelar_motivo;
        $ata->save();
        return redirect('ata/listar');
    }

    public function visualizar($id) {
        return view('visualizar', ['ata' => Ata::findOrFail($id)]);
    }
    
    public function cancelar($id){
        return view('cancelar',['ata' => Ata::findOrFail($id)]);
    }
    
    public function assinar($id){
        return view('assinar',['ata' => Ata::find($id)]);
    }

}
