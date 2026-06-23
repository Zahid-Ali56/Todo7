<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo7;
class Todo7Controller extends Controller{
    public function index(){
        $tasks = Todo7::all();
        return view('todo7', compact('tasks'));
    }
    public function store(Request $request){
        $request->validate(['title'=>'required']);
        Todo7::create(['title' => $request->title]);
        return redirect('/todo7')->with('success', 'Task created successfully.');
    }
    public function edit($id){
        $task = Todo7::find($id);
        return view('todo7_edit', compact('task'));
    }
    public function update(Request $request, $id){
        $request->validate((['title'=>'required']));
        $task = Todo7::find($id);
        $task->update(['title'=>$request->title]);
        return redirect('/todo7')->with('success', 'Task updated successfully.');
    }
    public function destroy($id){
        $task = Todo7::find($id);
        $task->delete();
        return redirect('/todo7')->with('success', 'Task deleted successfully.');
    }
}