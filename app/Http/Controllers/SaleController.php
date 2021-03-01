<?php

namespace App\Http\Controllers;

use App\Models\Sale;
use Illuminate\Http\Request;

class SaleController extends Controller {
  /*------------- CREATE ------------------*/
  public function create() {
    $sales = Sale::all()->paginate(5);
    return view('sales.create', compact('sales'));
  }
  public function store() {
    Sale::create($this->validationC());
    return redirect()->route('sales.index')
    ->with('class', 'success')
    ->with('message', 'Sale created successfully!');
  }
  /*-------------- READ --------------------*/
  public function index() {
    $sales = Sale::all()->paginate(5);
    return view('sales.index', compact('sales'));
  }
  public function show(Sale $product) {
    return view('sales.show', compact('product'));
  }
  /*-------------- UPDATE -------------------*/
  public function edit(Sale $product) {
    $sales = Sale::all()->paginate(5);
    return view('sales.edit', compact('sales', 'product'));
  }
  public function update(Sale $product) {
    $product->update($this->validationU());
    return redirect()->route('sales.index')
    ->with('class', 'info')
    ->with('message', 'Sale updated successfully!');
  }
  /*--------------- DELETE -------------------*/
  public function destroy(Sale $product) {
    $product->delete();
    return redirect()->route('sales.index')
    ->with('class', 'danger')
    ->with('message', 'Sale deleted successfully!');
  }
  /*--------------- VALIDATE -----------------*/
  protected function validationC() {
    return request()->validate([
      'id' => 'required|unique:sales',
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
    $data = Sale::all();
    return json_encode($data);
  }
}