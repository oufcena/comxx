<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller {
  /*------------- CREATE ------------------*/
  public function create() {
    $contacts = Contact::all()->paginate(5);
    return view('contacts.create', compact('contacts'));
  }
  public function store() {
    Contact::create($this->validationC());
    return redirect()->route('contacts.index')
    ->with('class', 'success')
    ->with('message', 'Contact created successfully!');
  }
  /*-------------- READ --------------------*/
  public function index() {
    $contacts = Contact::all()->paginate(5);
    return view('contacts.index', compact('contacts'));
  }
  public function show(Contact $product) {
    return view('contacts.show', compact('product'));
  }
  /*-------------- UPDATE -------------------*/
  public function edit(Contact $product) {
    $contacts = Contact::all()->paginate(5);
    return view('contacts.edit', compact('contacts', 'product'));
  }
  public function update(Contact $product) {
    $product->update($this->validationU());
    return redirect()->route('contacts.index')
    ->with('class', 'info')
    ->with('message', 'Contact updated successfully!');
  }
  /*--------------- DELETE -------------------*/
  public function destroy(Contact $product) {
    $product->delete();
    return redirect()->route('contacts.index')
    ->with('class', 'danger')
    ->with('message', 'Contact deleted successfully!');
  }
  /*--------------- VALIDATE -----------------*/
  protected function validationC() {
    return request()->validate([
      'id' => 'required|unique:contacts',
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
    $data = Contact::all();
    return json_encode($data);
  }
}