<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\TaskRequest;
use App\Models\Task;

class TaskController extends Controller
{
    /* Metodo index, listar tareas */
    public function index(){
        return view('index');
    }

    public function edit(){
        return view('edit');
    }

    /* Metodo Store Agregar nuevas tareas*/
    public function store(){
        return back();
    }

    /*Metodo Update marcar tareas*/
    public function update(){
        return back();
    }

 
    
    
    
}
