<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SemanaController extends Controller
{
    public function __construct(){
        $this->middleware('semana');
    }

    public function validar_dia(){
        echo '<br>Se ha validado el dia';
    }
}
