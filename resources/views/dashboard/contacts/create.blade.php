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
  $oldId = old('id');
  $oldType = old('type');
  $oldName = old('name');
  $oldPrice = old('price');
  $oldDiscount = old('discount');
  $oldDescription = old('description');
  $oldStock = old('stock');

  $id = "<input type='text' name='id' placeholder='ID' value='$oldId'>";
  $type = "<input type='text' name='type' placeholder='Type' value='$oldType'>";
  $name = "<input type='text' name='name' placeholder='Name' value='$oldName'>";
  $price = "<input type='text' name='price' placeholder='Price' value='$oldPrice'>";
  $discount = "<input type='text' name='discount' placeholder='Discount' value='$oldDiscount'>";
  $description = "<input type='text' name='description' placeholder='Description' value='$oldDescription'>";
  $stock = "<input type='text' name='stock' placeholder='Stock' value='$oldStock'>";
  ?>

  @include('table', [
    'name' => 'products',
    'body' => $products,
    'item' => '0', 
    'edit' => '0',
    'create' => [
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