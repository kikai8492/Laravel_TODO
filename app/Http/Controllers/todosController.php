<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Todo;
use App\Http\Requests\TodoRequest;

class TodosController extends Controller
{
    public function index()
    {
        $todos = Todo::orderBy('id','desc')->get();
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
        return to_route('todo.index')-> with('success','追加しました');
    }

    public function show(string $id)
    {
        $todo = Todo::find($id);
        return view('todos.show', compact('todo'));
    }

    public function edit(string $id)
    {
        $todo = Todo::find($id);
        return view('todos.edit', ['todo' => $todo]);
    }

    public function update(TodoRequest $request, string $id)
    {
        $todo = Todo::find($id);
        $validated = $request->validated();
        $todo->update($validated);
        return to_route('todo.index') -> with('success','更新しました');
    }

    public function destroy(string $id)
    {
        $todo = Todo::find($id);
        $todo->delete();
        return redirect()->route('todo.index')->with('success', 'タスクを削除しました');
    }
}
