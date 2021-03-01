@extends('layouts.app')

@section('content')

  @if ($message = Session::get('message'))
    @if ($class = Session::get('class'))
      @include('snack', [
        'class'=>$class,
        'message'=>$message,
      ])
    @endif
  @endif

  {!! $products->links() !!}

  @include('table', [
    'create' => '0',
    'edit' => '0',
    'name' => 'products',
    'body' => $products,
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