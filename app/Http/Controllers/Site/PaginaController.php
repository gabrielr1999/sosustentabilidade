<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PaginaController extends Controller
{
    public function sobre_nos()
    {
        return view('pagina.sobre-nos');
    }

    public function orientacoes()
    {
        return view('pagina.orientacoes');
    }
}
