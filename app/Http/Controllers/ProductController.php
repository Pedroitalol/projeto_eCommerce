<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;

class ProductController extends Controller
{
    function index(){
        $produtos = Produto::all();
        return view("produtos", ["produtos"=>$produtos]);
    }
}
