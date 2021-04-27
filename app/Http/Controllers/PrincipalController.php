<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrincipalCOntroller extends Controller
{
    public function Principal() {
        return view('site.principal', ['titulo' => 'Principal']);
    }
}
