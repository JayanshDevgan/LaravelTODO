<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Todo;

class TodoController extends Controller
{
    public function index() {
        $todos = Todo::orderBy('completed')->get();
        return view('todo.index')->with(['todos' => $todos]);
    }

    public function create() {
        return view("todo.create");
    }

    public function upload(Request $request) {
        $request->validate([
            'title' => 'required|max:255'
        ]);
        $TodoTitle = $request->title;
        Todo::create(['title' => $TodoTitle]);
        return redirect()->back()->with('success', "TODO created Successfully!");
    }

    public function edit($id) {
        $todo = Todo::find($id);
        return view('todo.edit')->with(['id' => $id, 'todo' => $todo]);
    }

    public function update(Request $request) {
        $request->validate([
            'title' => 'required|max:255'
        ]);
        $updateTodo = Todo::find($request->id);
        $updateTodo->update(['title' => $request->title]);
        return redirect('/')->with('success', "TODO updated Successfully!");
    }

    public function completed($id) {
        $todo = Todo::find($id);
        if($todo->completed) {
            $todo->update(['completed' => false]);
            return redirect()->back()->with('success', 'TODO marked as incomplete!');
        } else {
            $todo->update(['completed' => true]);
            return redirect()->back()->with('success', 'TODO marked as complete!');
        }
    }

    public function delete($id) {
        $todo = Todo::find($id);
        $todo->delete();
        return redirect()->back()->with('success', 'TODO Removed Successfully!');
    }

    public function graph() {
        return view("todo.graph");
    }
    
    public function notes() {
        return view("todo.notes");
    }
    
    public function organizer() {
        return view("todo.organizer");
    }

    public function script() {
        return view("todo.script");
    }
    public function convert() {
        return null;
    }
}
