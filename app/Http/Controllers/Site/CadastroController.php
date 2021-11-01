<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class CadastroController extends Controller
{
    public function index()
    {
        return view('cadastro.index');
    }

    public function salvar(Request $req)
    {
        // dd($req);
        $usuario = new User;
        $usuario->name = $req->nome;
        $usuario->email = $req->email;
        $usuario->password = bcrypt($req->senha);
        $usuario->save();

        return redirect()->route('site.login');
    }
    
}
