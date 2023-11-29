<?php

namespace App\Http\Controllers;

use App\Models\Financas;
use Illuminate\Http\Request;

class FinancasApiController extends Controller
{
    public function index(){
        return Financas::all();
    }
}


