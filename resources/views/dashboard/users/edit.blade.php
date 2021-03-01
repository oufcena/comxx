@extends('layouts.app')

@section('content')

  @if ($errors->any())
    <div class="alert alert-danger">
      <strong>Whoops!</strong> There were some problems with your input.<br><br>
      <ul>
        @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
  @endif

  {!! $products->links() !!}

  <?php 
  $id = "<input type='text' name='id' class='form-control' placeholder='ID' value='$product->id'>";
  $type = "<input type='text' name='type' class='form-control' placeholder='Type' value='$product->type'>";
  $name = "<input type='text' name='name' class='form-control' placeholder='Name' value='$product->name'>";
  $price = "<input type='text' name='price' class='form-control' placeholder='Price' value='$product->price'>";
  $discount = "<input type='text' name='discount' class='form-control' placeholder='Discount' value='$product->discount'>";
  $description = "<input type='text' name='description' class='form-control' placeholder='Description' value='$product->description'>";
  $stock = "<input type='text' name='stock' class='form-control' placeholder='Stock' value='$product->stock'>";
  ?>
  @include('table', [
    'name' => 'products',
    'body' => $products, 
    'item' => $product,
    'create' => '0',
    'edit' => [
      'id' => $id,
      'type' => $type,
      'image' => '',
      'name' => $name,
      'price' => $price,
      'discount' => $discount,
      'description' => $description,
      'stock' => $stock,
    ],
    'head' => ['ID', 'Type', 'Image', 'Name', 'Price', 'Discount', 'Description', 'Stock', 'Created_at', 'Updated_at', 'ACTIONS'],
    'color' => ['#008a00', '#3e65ff', '#aa00ff', '#d80073', '#fa6800', '#60a917', '#0050ef', '#a20025', '#825a2c', '#76608a', '#6a00ff'],
    'tableBorder' => 'blue', 
    'accordionbg' => 'yellow',
    'accordionc' => 'red',
    'rowOddbg' => '#333',
    'rowOddc' => '#fff',
    'rowEvenbg' => 'yellow',
    'rowEvenc' => '#000',
  ])
  
@endsection