<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TesteController extends Controller
{
    public function getTeste()
    {
        return [
            "teste" => 1
        ];
    }
}
