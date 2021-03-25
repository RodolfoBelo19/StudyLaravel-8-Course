<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdutosController extends Controller
{
    public function index(){
        return view('produtos.index');
    }

    public function create(){
        return view('produtos.create');
    }

    public function show($nome, $valor){


        return view('produtos.show', ['nome' => $nome, 'valor' => $valor]);
        /*
        if($valor){
            return "O nome do produto é $nome, e seu valor é $valor"; 
        }else{
            return "O nome do produto é $nome";
        }
        */
    }
}
