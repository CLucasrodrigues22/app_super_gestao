<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TesteController extends Controller
{
    public function Teste(int $p1, int $p2)
    {
        echo "A soma de $p1 + $p2 é: ".($p1+$p2);
    }
}
