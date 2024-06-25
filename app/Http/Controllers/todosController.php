<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Todo;
use App\Http\Requests\TodoRequest;

class TodosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $todos = Todo::all();
        return view('todos.index',compact('todos'));
    }

    public function create()
    {
        return view('todos.create');
    }

    public function store(TodoRequest $request)
    {
        $validated = $request->validated();
        Todo::create($validated);
        return to_route('todo.index')-> with('success','ブログを投稿しました');
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy(string $id)
    {
        //
    }
}
