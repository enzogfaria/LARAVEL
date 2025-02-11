<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    public function index() {
        $fornecedores = [
            0 => [
                'nome' => 'Fornecedor 1',
                'status' => 'N',
                'cnpj' => '00.000.000/000-00',
                'ddd' => '64',
                'telefone' => '00000-0000'
            ],
            1 => [
                'nome' => 'Fornecedor 2',
                'status' => 'S',                
            ]
        ];

        return view ('app.fornecedor.index', compact('fornecedores'));
    }
}
