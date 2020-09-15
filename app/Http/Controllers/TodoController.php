<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $allTodos = Todo::all();
        return response()->json([
            'data' => $allTodos
        ]);
    }

    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $todosValidation = request()->validate([
            'title' => 'required',
            'description' => 'required',
        ]);

        // return response()->json([
        //     'data' => $todosValidation
        // ]);

        $createdTodo = Todo::create(request()->all());

        // return response()->json([
        //     'title' => $todosValidation->title,
        //     'description' => $todosValidation->description,
        //     'completed' =>false,
        // ]);
        return response()->json([
            'info' => $createdTodo
        ]);
    }
   

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Todo  $todo
     * @return \Illuminate\Http\Response
     */
    public function show(Todo $todo)
    {
        //
        $singleTodo = Todo::find($todo);
       return response()->json([
            'data' => $singleTodo
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Todo  $todo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Todo $todo)
    {
        //
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Todo  $todo
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
       $todo = Todo::find($id)->delete();
      

    }
}
