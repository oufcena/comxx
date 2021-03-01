@extends('layouts.app')

@section('content')
<section style="padding: 2rem;">
  <div class="row">
    <div class="col-lg-12 margin-tb">
      <div class="pull-left">
        <h2> {{ $product->name }}</h2>
      </div>
      
      <div class="pull-right">
        <a class="btn btn-primary" href="{{ route('products.index') }}" title="Go back"> <i class="fas fa-backward "></i> </a>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
      <div class="form-group">
        <strong>ID:</strong>
        {{ $product->id }}
      </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
      <div class="form-group">
        <strong>Type:</strong>
        {{ $product->type }}
      </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
      <div class="form-group">
        <strong>Image:</strong>
        @include('image', [
          'image' => $product->image, 
          'width' => '300px',
          'height' => '300px',
          'margin' => '0',
        ])
      </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
      <div class="form-group">
        <strong>Name:</strong>
        {{ $product->name }}
      </div>
    </div>
    
    <div class="col-xs-12 col-sm-12 col-md-12">
      <div class="form-group">
        <strong>Price:</strong>
          {{ $product->price }} EG
      </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
      <div class="form-group">
        <strong>Discount:</strong>
        @if( $product->discount )
          {{ $product->discount }}
        @else
          Nothing
        @endif
      </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
      <div class="form-group">
        <strong>Description:</strong>
        {{ $product->description }}
      </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
      <div class="form-group">
        <strong>Stock:</strong>
        {{ $product->stock }}
      </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
      <div class="form-group">
        <strong>Date Created:</strong>
        {{ date_format($product->created_at, 'jS M Y') }}
      </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
      <div class="form-group">
        <strong>Date Updated:</strong>
        {{ date_format($product->updated_at, 'jS M Y') }}
      </div>
    </div>
  </div>
</section>
@endsection