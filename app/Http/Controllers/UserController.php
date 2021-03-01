<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller {
  /*------------- CREATE ------------------*/
  public function create() {
    $users = User::all()->paginate(5);
    return view('users.create', compact('users'));
  }
  public function store() {
    User::create($this->validationC());
    return redirect()->route('users.index')
    ->with('class', 'success')
    ->with('message', 'User created successfully!');
  }
  /*-------------- READ --------------------*/
  public function index() {
    $users = User::all()->paginate(5);
    return view('users.index', compact('users'));
  }
  public function show(User $product) {
    return view('users.show', compact('product'));
  }
  /*-------------- UPDATE -------------------*/
  public function edit(User $product) {
    $users = User::all()->paginate(5);
    return view('users.edit', compact('users', 'product'));
  }
  public function update(User $product) {
    $product->update($this->validationU());
    return redirect()->route('users.index')
    ->with('class', 'info')
    ->with('message', 'User updated successfully!');
  }
  /*--------------- DELETE -------------------*/
  public function destroy(User $product) {
    $product->delete();
    return redirect()->route('users.index')
    ->with('class', 'danger')
    ->with('message', 'User deleted successfully!');
  }
  /*--------------- VALIDATE -----------------*/
  protected function validationC() {
    return request()->validate([
      'image' => 'required',
      'username' => 'required',
      'email' => 'required|email',
      'password' => 'required|confirm',
    ],[
      'username.required' => 'Must NOT be empty!!'
    ]);
  }
  protected function validationU() {
    return request()->validate([
      'image' => 'required',
      'username' => 'required',
      'email' => 'required|email',
      'password' => 'required|confirm',
    ],[
      'username.required' => 'Must NOT be empty!!'
    ]);
  }
  /*------------------ API --------------------*/
  public function api() {
    $data = User::all();
    return json_encode($data);
  }
}