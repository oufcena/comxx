<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller {
  /*------------- CREATE ------------------*/
  public function create() {
    $products = Product::all()->paginate(5);
    return view('products.create', compact('products'));
  }
  public function store() {
    Product::create($this->validationC());
    return redirect()->route('products.index')
    ->with('class', 'success')
    ->with('message', 'Product created successfully!');
  }
  /*-------------- READ --------------------*/
  public function index() {
    $products = Product::all()->paginate(5);
    return view('products.index', compact('products'));
  }
  public function show(Product $product) {
    return view('products.show', compact('product'));
  }
  /*-------------- UPDATE -------------------*/
  public function edit(Product $product) {
    $products = Product::all()->paginate(5);
    return view('products.edit', compact('products', 'product'));
  }
  public function update(Product $product) {
    $product->update($this->validationU());
    return redirect()->route('products.index')
    ->with('class', 'info')
    ->with('message', 'Product updated successfully!');
  }
  /*--------------- DELETE -------------------*/
  public function destroy(Product $product) {
    $product->delete();
    return redirect()->route('products.index')
    ->with('class', 'danger')
    ->with('message', 'Product deleted successfully!');
  }
  /*--------------- VALIDATE -----------------*/
  protected function validationC() {
    return request()->validate([
      'id' => 'required|unique:products',
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
    $data = Product::all();
    return json_encode($data);
  }
}