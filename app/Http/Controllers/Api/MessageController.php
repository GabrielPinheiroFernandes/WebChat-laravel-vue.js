<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Models\Message;
use Illuminate\Http\Response;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    public function listMessages(User $user)
{
    // Log do usuário chamado
    //\Log::info('listMessages foi chamado para o usuário:', ['user_id' => $user->id]);

    // Identifica os IDs dos usuários
    $userFrom = Auth::user()->id;
    $userTo = $user->id;

    // Busca as mensagens entre os dois usuários
    $messages = Message::where(function ($query) use ($userFrom, $userTo) {
        $query->where('from', $userFrom)->where('to', $userTo);
    })
    ->orWhere(function ($query) use ($userFrom, $userTo) {
        $query->where('from', $userTo)->where('to', $userFrom);
    })
    ->orderBy('created_at', 'ASC')
    ->get();

    
    return response()->json([
        'messages' => $messages,
    ], Response::HTTP_OK);
}


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
