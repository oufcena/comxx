@extends('layouts.app')

@section('title', 'Products')

@section('content')

  @include('layouts.header')
  @include('layouts.nav')
 
  @include('pages.main.products')

    @include('layouts.clock')
    @include('layouts.cal')
  @include('layouts.footer')  

@endsection