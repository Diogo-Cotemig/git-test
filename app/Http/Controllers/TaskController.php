<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tarefa; // Ou o modelo que você está usando, como App\Models\User

class TaskController extends Controller
{
    public function index()
    {
        $tasks = Tarefa::all();
        return view('tasks.index', compact('tasks'));
    }

    public function create()
    {
        return view('tasks.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'     => 'required|string|max:255',
            'email'    => 'required|string|email|max:255', // Adicionei a validação de email
            'password' => 'required|string|min:8', // Mudei 'senha' para 'password'
        ]);

        // Cria a tarefa ou usuário com base nos dados validados
        Tarefa::create($request->all());

        return redirect()->route('tasks.index')->with('success', 'Tarefa executada com sucesso!');
    }
}
