<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PrincipalController extends Controller
{
    public function index() {
        $nome = "Leandro";

        return view("principal", compact("nome"));
    }
}
