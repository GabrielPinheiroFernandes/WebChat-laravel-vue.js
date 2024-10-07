<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller; // Importa a classe Controller base
use Illuminate\Http\Request; // Importa a classe Request do Laravel
use Inertia\Inertia; // Importa a classe Inertia para renderização de componentes

class PageController extends Controller
{
    public function Welcome()
    {
        return view('Welcome'); // Retorna a view 'Welcome'
    }

    public function DashBoard()
    {
        return Inertia::render('Dashboard'); // Renderiza o componente 'Dashboard' com Inertia
    }

    public function Chat()
    {
        return Inertia::render('Chat'); // Renderiza o componente 'Chat'
    }
}
