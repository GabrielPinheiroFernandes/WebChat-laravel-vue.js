<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    // Método para listar todos os usuários
    public function index()
    {
        $userLogged = Auth::User();

        $users = User::Where('id','!=' ,$userLogged->id)->get();
        

        // Retorna a lista de usuários com status 200 (OK)
        return response()->json(['users' => $users], Response::HTTP_OK);
    }
    
}
