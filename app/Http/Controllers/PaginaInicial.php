<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaginaInicial extends Controller
{
    public function controllerhome() {
        return view('site.paginainicial');
    } 
}
