<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Denuncia;
use Illuminate\Support\Facades\Auth;

class DenunciaController extends Controller
{

    private $denuncia;

    public function __construct(Denuncia $denuncia)
    {
        $this->denuncia = $denuncia;
    }

    public function index()
    {
        $user = auth()->user();
        $registros = $user->store->denuncia;
            return view('admin.denuncias.index', compact('registros'));
    }

    public function adicionar()
    {
        // User::create([
        //     'id' => $req->id,
        //     'name' => $req->name,
        //     'email' => $req->email
        // ]);

        // Denuncia::create([
        //     'titulo' => $req->titulo, 
        //     'descricao' =>$req->descricao,
        //     'estado' =>$req->estado,
        //     'municipio' =>$req->municipio,
        //     'bairro' =>$req->bairro,
        //     'pntReferencia' =>$req->pntReferencia,
        //     'problema' =>$req->problema,
        //     'imagem' =>$req->imagem,
        //     'resolvido' =>$req->resolvido,
        //     'id_usuario' =>$req->resolvido
        // ]);

        return view('admin.denuncias.adicionar');
    }

    public function salvar(Request $req)
    {
        $dados = $req->all();

        if(isset($dados['resolvido'])){
            $dados['resolvido'] = 'Não';
        }else{
            $dados['resolvido'] = 'Sim';
        }

        if($req->hasFile('imagem')){
            $imagem = $req->file('imagem');
            $num = rand(1111,9999);
            $dir = "img/denuncias";
            $ex = $imagem->guessClientExtension();
            $nomeImagem = "imagem_".$num.".".$ex;
            $imagem->move($dir,$nomeImagem);
            $dados['imagem'] = $dir."/".$nomeImagem;
        }
// dd($dados);
        $denuncia = auth()->user()->denuncia;
        Denuncia::create($dados);

        return redirect()->route('admin.denuncias');
    }

    public function editar($id)
    {
        $registro = Denuncia::find($id);
        return view('admin.denuncias.editar', compact('registro'));
    }

    public function atualizar(Request $req, $id)
    {
        $dados = $req->all();

        if(isset($dados['resolvido'])){
            $dados['resolvido'] = 'Não';
        }else{
            $dados['resolvido'] = 'Sim';
        }

        if($req->hasFile('imagem')){
            $imagem = $req->file('imagem');
            $num = rand(1111,9999);
            $dir = "img/denuncias";
            $ex = $imagem->guessClientExtension();
            $nomeImagem = "imagem_".$num.".".$ex;
            $imagem->move($dir,$nomeImagem);
            $dados['imagem'] = $dir."/".$nomeImagem;
        }

        Denuncia::find($id)->update($dados);

        return redirect()->route('admin.denuncias');
    }

    public function deletar($id)
    {
        Denuncia::find($id)->delete();
        return redirect()->route('admin.denuncias');
    }
}
