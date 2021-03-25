<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdutosController extends Controller
{
    public function index(){
        return "Pagina de produtos";
    }

    public function create(){
        return "Pagina para inserir produto!";
    }

    public function show($nome, $valor){
        if($valor){
            return "O nome do produto é $nome, e seu valor é $valor"; 
        }else{
            return "O nome do produto é $nome";
        }
    }
}
