<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller {
  /*------------- CREATE ------------------*/
  public function create() {
    $tasks = Task::all()->paginate(5);
    return view('tasks.create', compact('tasks'));
  }
  public function store() {
    Task::create($this->validationC());
    return redirect()->route('tasks.index')
    ->with('class', 'success')
    ->with('message', 'Task created successfully!');
  }
  /*-------------- READ --------------------*/
  public function index() {
    $tasks = Task::all()->paginate(5);
    return view('tasks.index', compact('tasks'));
  }
  public function show(Task $product) {
    return view('tasks.show', compact('product'));
  }
  /*-------------- UPDATE -------------------*/
  public function edit(Task $product) {
    $tasks = Task::all()->paginate(5);
    return view('tasks.edit', compact('tasks', 'product'));
  }
  public function update(Task $product) {
    $product->update($this->validationU());
    return redirect()->route('tasks.index')
    ->with('class', 'info')
    ->with('message', 'Task updated successfully!');
  }
  /*--------------- DELETE -------------------*/
  public function destroy(Task $product) {
    $product->delete();
    return redirect()->route('tasks.index')
    ->with('class', 'danger')
    ->with('message', 'Task deleted successfully!');
  }
  /*--------------- VALIDATE -----------------*/
  protected function validationC() {
    return request()->validate([
      'id' => 'required|unique:tasks',
      'type' => 'required',
      'image' => 'required',
      'name' => 'required',
      'price' => 'required',
      'description' => 'required',
      'stock' => 'required'
    ],[
      'name.required' => 'Must NOT be empty!!'
    ]);
  }
  protected function validationU() {
    return request()->validate([
      'id' => 'required',
      'type' => 'required',
      'image' => 'required',
      'name' => 'required',
      'price' => 'required',
      'description' => 'required',
      'stock' => 'required'
    ],[
      'name.required' => 'Must NOT be empty!!'
    ]);
  }
  /*------------------ API --------------------*/
  public function api() {
    $data = Task::all();
    return json_encode($data);
  }
}