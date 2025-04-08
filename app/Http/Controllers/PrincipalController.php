<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Receita;

class PrincipalController extends Controller
{
    public function index() {
        $receitas = Receita::all();
        
        return view("principal", compact("receitas"));
    }
}
