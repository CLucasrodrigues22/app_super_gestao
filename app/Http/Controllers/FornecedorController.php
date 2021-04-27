<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    public function Fornecedor()
    {
        $fornecedores = [
            0 => ['nome' => 'Fornecedor 1', 'Status' => 'N'],
        ];

        return view('app.fornecedor.index', compact('fornecedores'));
    }
}
