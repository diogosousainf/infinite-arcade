<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Display the authenticated user's profile.
     *
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $user = Auth::user(); // Obtém o usuário autenticado

        return view('pages.users.show', compact('user')); // Retorna a view do perfil do usuário
    }
}
