<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index() {
        return view('index');
    }

    public function boletim() {
        return view('boletim');
    }

    public function corpodocente() {
        return view('corpodocente');
    }

    public function graficos() {
        return view('graficos');
    }

    public function mural() {
        return view('mural');
    }

    public function ocorrencias() {
        return view('ocorrencias');
    }

    public function perfil() {
        return view('perfil');
    }
}
