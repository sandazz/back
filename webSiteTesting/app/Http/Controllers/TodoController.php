<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        {
            $todos = Todo::all()->where('completed', false);
            return view('todo', ['todos' => $todos]);
        }
    }

    public function nextTodo()
    {
        {
            $todos = Todo::all()->where('completed', false);
            return view('nextTodo', ['todos' => $todos]);
        }
    }

    public function done()
    {
        {
            $todos = Todo::all()->where('completed', true);
            return view('done', ['todos' => $todos]);
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        error_log($request->title);
        $todo = new Todo();
        $todo->title = $request->input('title');
        $todo->description = $request->input('description');

        $todo->save();

       return redirect()->route('todo.index');
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
    public function show(Todo $todo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Todo $todo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function updateCompleted(Request $request, Todo $id)
    {
        $id->update(['completed' => true]);
        return redirect()->route('todo.index');
    }

    public function updateInCompleted(Request $request, Todo $id)
    {
        $id->update(['completed' => false]);
        return redirect()->route('todo.done');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Todo $id)
    {
        $id->delete();
        return redirect()->route('todo.index');
    }
}
