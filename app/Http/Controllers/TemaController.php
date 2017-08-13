<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TemaController extends Controller
{
    public function update(Request $request, $tema) {
        $user = Auth::user();
        $user->tema_id = $tema;
        $user->save();
        return redirect()->back();
    }
}
