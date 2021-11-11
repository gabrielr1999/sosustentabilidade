<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Denuncia;
use App\Models\ProductImage;
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
        // $user = auth()->user();
        $registros = Denuncia::where("id_usuario", Auth::user()->id)->get();
            return view('admin.denuncias.index', compact('registros'));
    }

    public function adicionar()
    {

        return view('admin.denuncias.adicionar');
    }

    public function salvar(Request $req)
    {
        $denuncia = new Denuncia();
        $dados = $req->all();

        if(!isset($dados['resolvido'])){
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
    
        $dados['id_usuario'] = auth()->id();
//  dd($dados);
//         $denuncia = auth()->user()->denuncia;
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
            $dados['resolvido'] = 'Sim';
        }else{
            $dados['resolvido'] = 'Não';
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

    public function busca(Request $request)
    {
        $search = request('search');

        if($search){
            $denuncias = Denuncia::where([
                ['estado','like','%'.$search.'%']
            ])->get();
            
        }else {
            $denuncias = Denuncia::all();
        }
        // dd($search);
        return view('pagina.busca',compact('denuncias','search'));
    }

    public function interna( $problema, $titulo)
    {
        $registros = Denuncia::where('titulo',$titulo)->get();
        $registros = Denuncia::where('problema',$problema)->get();
        
        // dd($registros);
        return view('interna',compact('registros'));
    }
}
