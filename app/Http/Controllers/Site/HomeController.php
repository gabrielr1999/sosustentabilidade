<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Denuncia;

class HomeController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    //     $this->middleware(function ($request, $next) {
    //     $this->user = Auth::user();

    //     return $next($request);
    //     });
    // }

    public function index()
    {
        $denuncias = Denuncia::all();
        return view('home',compact('denuncias'));
    }
}
