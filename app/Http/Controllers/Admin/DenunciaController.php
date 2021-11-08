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

        // for($i = 0; $i < count($req->allFiles()['imagem']); $i++)
        // {
        //     $file = $req->allFiles()['imagem'][$i];
        //     $denunciaImagem = new ProductImage();
        //     $denunciaImagem->denuncia = $denuncia->id;
        //     $denunciaImagem->path = $file->store('denuncias');
        //     $denunciaImagem->save();
        //     unset($denunciaImagem);
        // }

        if($req->hasFile('imagem')){
            $imagem = $req->file('imagem');
            $num = rand(1111,9999);
            $dir = "img/denuncias";
            $ex = $imagem->guessClientExtension();
            $nomeImagem = "imagem_".$num.".".$ex;
            $imagem->move($dir,$nomeImagem);
            $dados['imagem'] = $dir."/".$nomeImagem;
        }

        // $loop = count($req->file('imagem'));

        // for($i = 0; $i < $loop; $i++){
        //     if($req->hasFile('imagem')){
        //             $imagem = $req->file('imagem');
        //             $num = rand(1111,9999);
        //             $dir = "img/denuncias";
        //             $ex = $imagem->guessClientExtension();
        //             $nomeImagem = "imagem_".$num.".".$ex;
        //             $imagem->move($dir,$nomeImagem);
        //             $dados['imagem'] = $dir."/".$nomeImagem;
        //         }
        // }

        // $images=array();
        // if($files=$req->file('imagem')){
        //     foreach($files as $file){
        //         $name=$file->getClientOriginalName();
        //     $file->move('img/denuncias',$name);
        //     $dados[]=$name;
        //     }
        // }
        /*Insert your data*/

        // Detail::insert( [
        //     'images'=>  implode("|",$images),
        //     'description' =>$input['description'],
        //     //you can put other insertion here
        // ]);

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
}
